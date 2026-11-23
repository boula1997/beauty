{{-- Shared fields for product variation create/edit. Expects $product, $colors, $sizes and optional $variation. --}}
@php($variation = $variation ?? null)

<div class="container p-3">
    <div class="card card-custom">
        <div class="card-header">
            <h5>@lang('general.variations') - {{ $product->title }}</h5>
        </div>
        <div class="card-body">
            @error('product_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('general.title') }}</label>
                    <input type="text" name="title" maxlength="255"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', $variation?->title) }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.color') }}</label>
                    <select class="form-select form-select-lg @error('color_id') is-invalid @enderror" name="color_id">
                        <option value="">{{ __('general.none') }}</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}" {{ old('color_id', $variation?->color_id) == $color->id ? 'selected' : '' }}>
                                {{ $color->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('color_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.size') }}</label>
                    <select class="form-select form-select-lg @error('size_id') is-invalid @enderror" name="size_id">
                        <option value="">{{ __('general.none') }}</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->id }}" {{ old('size_id', $variation?->size_id) == $size->id ? 'selected' : '' }}>
                                {{ $size->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('size_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.price') }}<span class="text-danger"> * </span></label>
                    <input type="number" step="0.01" min="0" name="price"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price', $variation?->getRawOriginal('price') ?? $product->getRawOriginal('price')) }}">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.quantity') }}<span class="text-danger"> * </span></label>
                    <input type="number" step="1" min="0" name="quantity"
                        class="form-control @error('quantity') is-invalid @enderror"
                        value="{{ old('quantity', $variation?->quantity ?? 0) }}">
                    @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer mb-5">
            <button type="submit" class="btn btn-outline-primary px-5">{{ __('general.save') }}</button>
            <a href="{{ route('products.variations.index', $product) }}" class="btn btn-outline-danger px-5">{{ __('general.cancel') }}</a>
        </div>
    </div>
</div>
