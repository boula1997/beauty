{{-- Color swatch + name and size of an order line's variation. Usage: @include('admin.components.variation-badge', ['variation' => $orderproduct->variation]) --}}
@if ($variation)
    <div class="d-flex flex-wrap align-items-center gap-2 small text-muted mt-1">
        @if ($variation->color)
            <span class="d-inline-flex align-items-center gap-1">
                {{ __('general.color') }}:
                <span style="width:12px;height:12px;border-radius:50%;display:inline-block;border:1px solid #ccc;background:{{ $variation->color->hexCode }}"></span>
                <strong>{{ $variation->color->title ?? $variation->color->hexCode }}</strong>
            </span>
        @endif
        @if ($variation->size)
            <span>{{ __('general.size') }}: <strong>{{ $variation->size->title }}</strong></span>
        @endif
    </div>
@endif
