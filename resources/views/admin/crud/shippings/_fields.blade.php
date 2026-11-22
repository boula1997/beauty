{{-- Shared create/edit fields. Expects optional $shipping. --}}
<div class="card card-custom mb-2">
    <div class="card-toolbar px-3 pt-3">
        <ul class="nav nav-tabs nav-bold nav-tabs-line">
            @foreach (config('translatable.locales') as $key => $locale)
                <li class="nav-item">
                    <a class="nav-link @if ($key == 0) active @endif" data-toggle="tab" href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            @foreach (config('translatable.locales') as $key => $locale)
                <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}" role="tabpanel">
                    <div class="form-group">
                        <label>{{ __('general.governorate') }} - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                        <input type="text" name="{{ $locale . '[title]' }}" placeholder="{{ __('general.governorate') }}"
                            class="form-control @error($locale . '.title') is-invalid @enderror"
                            value="{{ old($locale . '.title', isset($shipping) ? $shipping->translate($locale)?->title : '') }}">
                        @error($locale . '.title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="card card-custom">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">{{ __('general.fee') }} ({{ __('general.pound') }})<span class="text-danger"> * </span></label>
                <input type="number" step="0.01" min="0" name="fee" class="form-control @error('fee') is-invalid @enderror"
                    value="{{ old('fee', $shipping->fee ?? '') }}">
                @error('fee')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer mb-5">
        <button type="submit" class="btn btn-outline-primary px-5">{{ __('general.save') }}</button>
        <a href="{{ route('shippings.index') }}" class="btn btn-outline-danger px-5">{{ __('general.cancel') }}</a>
    </div>
</div>
