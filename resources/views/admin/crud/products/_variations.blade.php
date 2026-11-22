{{--
    Colors, sizes & stock for a product.
    1) click the colors it comes in, 2) click its sizes (none = no sizes), 3) type stock in the grid.
    An empty grid cell = that color/size is not sold; 0 = sold out.
    Expects: $colors, $sizes, and optional $product (edit).
    Submits variations[i][color_id|size_id|quantity]; ProductController::syncVariations() saves them.
--}}
@php
    $rows = old('variations');
    if ($rows === null) {
        $rows = isset($product)
            ? $product->productVariations()->get()
                ->map(fn ($v) => ['color_id' => $v->color_id, 'size_id' => $v->size_id, 'quantity' => $v->quantity])->all()
            : [];
    }
    $colorOptions = $colors->map(fn ($c) => ['id' => $c->id, 'title' => $c->title ?: $c->hexCode, 'hex' => $c->hexCode])->values();
    // Colors sharing a name (e.g. two blacks) also show their code so they can be told apart.
    $dupNames = $colorOptions->countBy('title')->filter(fn ($n) => $n > 1)->keys()->all();
    $sizeOptions = $sizes->map(fn ($s) => ['id' => $s->id, 'title' => $s->title])->values();
@endphp

<style>
    #variations-card .pick-grid { display: flex; flex-wrap: wrap; gap: 10px; }
    #variations-card .color-pick { width: 84px; padding: 8px 4px; border: 2px solid transparent; border-radius: 12px; background: #fff; text-align: center; cursor: pointer; transition: border-color .15s, background .15s; }
    #variations-card .color-pick:hover { background: #f7f2ef; }
    #variations-card .color-pick .dot { display: block; width: 38px; height: 38px; border-radius: 50%; margin: 0 auto 6px; border: 1px solid rgba(0,0,0,.15); position: relative; }
    #variations-card .color-pick .name { font-size: 12px; line-height: 1.2; display: block; word-break: break-word; }
    #variations-card .color-pick .hex { font-size: 10px; color: #888; display: block; direction: ltr; }
    #variations-card .color-pick[aria-pressed="true"] { border-color: #AA674E; background: #fbf3ee; }
    #variations-card .color-pick[aria-pressed="true"] .dot::after { content: "✓"; position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #fff; text-shadow: 0 0 3px rgba(0,0,0,.7); }
    #variations-card .size-pick { min-width: 56px; padding: 8px 14px; border: 2px solid #ddd; border-radius: 10px; background: #fff; font-weight: 600; cursor: pointer; }
    #variations-card .size-pick[aria-pressed="true"] { border-color: #AA674E; background: #AA674E; color: #fff; }
    #variations-card .step { font-weight: 700; margin-bottom: 8px; }
    #variations-card .step .num { display: inline-flex; width: 24px; height: 24px; border-radius: 50%; background: #AA674E; color: #fff; align-items: center; justify-content: center; font-size: 13px; margin-inline-end: 6px; }
    #variations-card .stock-grid input { width: 90px; text-align: center; }
    #variations-card .stock-grid input.is-zero { border-color: #dc3545; background: #fff5f5; }
    #variations-card .stock-grid th, #variations-card .stock-grid td { vertical-align: middle; white-space: nowrap; }
</style>

<div class="card" id="variations-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h5 class="mb-1">{{ __('general.variations_title') }}</h5>
            <small class="text-muted">{{ __('general.variations_hint') }}</small>
        </div>
        <span class="badge bg-light text-dark border fs-6">{{ __('general.total_stock') }}: <strong id="variations-total">0</strong></span>
    </div>

    <div class="card-body">
        @if ($errors->has('variations') || collect($errors->keys())->contains(fn ($k) => str_starts_with($k, 'variations.')))
            <div class="alert alert-danger py-2">
                @foreach (collect($errors->getMessages())->filter(fn ($v, $k) => $k === 'variations' || str_starts_with($k, 'variations.'))->flatten()->unique() as $message)
                    <div>{{ $message }}</div>
                @endforeach
            </div>
        @endif

        {{-- Step 1: colors --}}
        <div class="mb-4">
            <div class="step"><span class="num">1</span>{{ __('general.step_pick_colors') }}</div>
            <div class="pick-grid" id="color-picks">
                @foreach ($colorOptions as $c)
                    <button type="button" class="color-pick" data-id="{{ $c['id'] }}" aria-pressed="false" title="{{ $c['title'] }}">
                        <span class="dot" style="background: {{ $c['hex'] }}"></span>
                        <span class="name">{{ $c['title'] }}</span>
                        @if (in_array($c['title'], $dupNames))<span class="hex">{{ $c['hex'] }}</span>@endif
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Step 2: sizes --}}
        <div class="mb-4">
            <div class="step"><span class="num">2</span>{{ __('general.step_pick_sizes') }}</div>
            <div class="pick-grid" id="size-picks">
                @foreach ($sizeOptions as $s)
                    <button type="button" class="size-pick" data-id="{{ $s['id'] }}" aria-pressed="false">{{ $s['title'] }}</button>
                @endforeach
            </div>
            <small class="text-muted d-block mt-2">{{ __('general.step_sizes_hint') }}</small>
        </div>

        {{-- Step 3: stock grid --}}
        <div>
            <div class="step"><span class="num">3</span>{{ __('general.step_enter_stock') }}</div>
            <p class="text-muted small mb-2" id="variations-empty">{{ __('general.variations_empty') }}</p>
            <div class="table-responsive">
                <table class="table table-bordered stock-grid mb-1" id="stock-grid"></table>
            </div>
            <small class="text-muted" id="grid-hint">{{ __('general.step_stock_hint') }}</small>
        </div>

        <div id="variations-inputs"></div>
    </div>
</div>

@push('scripts')
<script>
(function () {
    const COLORS = @json($colorOptions);
    const SIZES = @json($sizeOptions);
    const INITIAL = @json(array_values($rows));
    const T = {
        color: @json(__('general.color')),
        stock: @json(__('general.stock')),
        fillRow: @json(__('general.fill_row')),
        notSold: @json(__('general.not_sold')),
    };

    const card = document.getElementById('variations-card');
    const grid = document.getElementById('stock-grid');
    const inputs = document.getElementById('variations-inputs');
    const esc = (s) => String(s ?? '').replace(/[&<>"']/g, (c) => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));

    // stock[colorId][sizeId or ''] = quantity string ('' = not sold)
    const stock = {};
    const selectedColors = [];   // keeps click order
    const selectedSizes = new Set();

    INITIAL.forEach((r) => {
        const c = String(r.color_id), s = r.size_id ? String(r.size_id) : '';
        (stock[c] = stock[c] || {})[s] = String(r.quantity ?? 0);
        if (!selectedColors.includes(c)) selectedColors.push(c);
        if (s) selectedSizes.add(s);
    });

    const sizeList = () => SIZES.filter((s) => selectedSizes.has(String(s.id)));
    const colorById = (id) => COLORS.find((c) => String(c.id) === String(id));

    function syncButtons() {
        card.querySelectorAll('.color-pick').forEach((b) => b.setAttribute('aria-pressed', selectedColors.includes(b.dataset.id)));
        card.querySelectorAll('.size-pick').forEach((b) => b.setAttribute('aria-pressed', selectedSizes.has(b.dataset.id)));
    }

    function renderGrid() {
        const sizes = sizeList();
        const cols = sizes.length ? sizes : [{ id: '', title: T.stock }];
        document.getElementById('variations-empty').classList.toggle('d-none', selectedColors.length > 0);
        document.getElementById('grid-hint').classList.toggle('d-none', selectedColors.length === 0);
        if (!selectedColors.length) { grid.innerHTML = ''; writeInputs(); return; }

        let html = '<thead class="table-light"><tr><th>' + esc(T.color) + '</th>';
        cols.forEach((s) => { html += '<th class="text-center">' + esc(s.title) + '</th>'; });
        if (cols.length > 1) html += '<th></th>';
        html += '</tr></thead><tbody>';
        selectedColors.forEach((cid) => {
            const c = colorById(cid); if (!c) return;
            html += '<tr><th><span style="display:inline-block;width:18px;height:18px;border-radius:50%;vertical-align:middle;border:1px solid #ccc;background:' + esc(c.hex) + '"></span> ' + esc(c.title) + '</th>';
            cols.forEach((s) => {
                const v = (stock[cid] || {})[String(s.id)] ?? '';
                html += '<td class="text-center"><input type="number" min="0" step="1" inputmode="numeric" class="form-control d-inline-block' + (v === '0' ? ' is-zero' : '') + '"'
                    + ' data-color="' + esc(cid) + '" data-size="' + esc(s.id) + '" value="' + esc(v) + '" placeholder="' + esc(T.notSold) + '"></td>';
            });
            if (cols.length > 1) html += '<td><button type="button" class="btn btn-sm btn-outline-secondary fill-row" data-color="' + esc(cid) + '">' + esc(T.fillRow) + '</button></td>';
            html += '</tr>';
        });
        grid.innerHTML = html + '</tbody>';
        writeInputs();
    }

    // Hidden inputs the controller reads; only cells with a number are sold.
    function writeInputs() {
        const sizes = sizeList();
        const sizeIds = sizes.length ? sizes.map((s) => String(s.id)) : [''];
        let i = 0, total = 0, html = '';
        selectedColors.forEach((cid) => sizeIds.forEach((sid) => {
            const v = (stock[cid] || {})[sid];
            if (v === undefined || v === '') return;
            const q = Math.max(0, parseInt(v, 10) || 0);
            total += q;
            html += '<input type="hidden" name="variations[' + i + '][color_id]" value="' + esc(cid) + '">'
                  + '<input type="hidden" name="variations[' + i + '][size_id]" value="' + esc(sid) + '">'
                  + '<input type="hidden" name="variations[' + i + '][quantity]" value="' + q + '">';
            i++;
        }));
        inputs.innerHTML = html;
        document.getElementById('variations-total').textContent = total;
    }

    card.querySelector('#color-picks').addEventListener('click', (e) => {
        const b = e.target.closest('.color-pick'); if (!b) return;
        const id = b.dataset.id, at = selectedColors.indexOf(id);
        if (at >= 0) selectedColors.splice(at, 1); else selectedColors.push(id);
        syncButtons(); renderGrid();
    });
    card.querySelector('#size-picks').addEventListener('click', (e) => {
        const b = e.target.closest('.size-pick'); if (!b) return;
        const id = b.dataset.id;
        const wasEmpty = selectedSizes.size === 0;
        if (selectedSizes.has(id)) selectedSizes.delete(id); else selectedSizes.add(id);
        // switching between "no sizes" and "sizes": carry a color's single stock into its first size
        if (wasEmpty && selectedSizes.size === 1) Object.values(stock).forEach((m) => { if (m[''] !== undefined && m[id] === undefined) { m[id] = m['']; } delete m['']; });
        syncButtons(); renderGrid();
    });
    grid.addEventListener('input', (e) => {
        const el = e.target; if (!el.dataset.color) return;
        (stock[el.dataset.color] = stock[el.dataset.color] || {})[el.dataset.size] = el.value;
        el.classList.toggle('is-zero', el.value === '0');
        writeInputs();
    });
    grid.addEventListener('click', (e) => {
        const b = e.target.closest('.fill-row'); if (!b) return;
        const cells = [...grid.querySelectorAll('input[data-color="' + b.dataset.color + '"]')];
        const first = cells.find((c) => c.value !== '');
        if (!first) { cells[0]?.focus(); return; }
        cells.forEach((c) => { c.value = first.value; c.dispatchEvent(new Event('input', { bubbles: true })); });
    });

    // Old data where some colors have sizes and others don't can't be shown in one grid: warn instead of silently dropping it.
    const mixed = selectedSizes.size ? selectedColors.filter((c) => (stock[c] || {})[''] !== undefined) : [];
    if (mixed.length) {
        const warn = document.createElement('div');
        warn.className = 'alert alert-warning py-2';
        warn.textContent = @json(__('general.variation_mixed_existing')) + ' ' + mixed.map((c) => colorById(c)?.title).join(', ');
        card.querySelector('.card-body').prepend(warn);
    }

    syncButtons();
    renderGrid();
})();
</script>
@endpush
