{{-- Shared coupon fields. Expects optional $coupon. --}}
@php($coupon = $coupon ?? null)

<div class="container p-3">
    <div class="card card-custom">
        <div class="card-header">
            @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => $coupon ? 'edit' : 'create'])
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.code') }}<span class="text-danger"> * </span></label>
                    <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                        value="{{ old('code', $coupon?->code) }}">
                    @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.percentage') }} (%)<span class="text-danger"> * </span></label>
                    <input type="number" step="0.01" min="0" max="100" name="percentage"
                        class="form-control @error('percentage') is-invalid @enderror"
                        value="{{ old('percentage', $coupon?->percentage) }}">
                    @error('percentage') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.max_discount') }}</label>
                    <input type="number" step="0.01" min="0" name="max_discount"
                        class="form-control @error('max_discount') is-invalid @enderror"
                        value="{{ old('max_discount', $coupon?->max_discount) }}">
                    @error('max_discount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.min_order_amount') }}</label>
                    <input type="number" step="0.01" min="0" name="min_order_amount"
                        class="form-control @error('min_order_amount') is-invalid @enderror"
                        value="{{ old('min_order_amount', $coupon?->min_order_amount) }}">
                    @error('min_order_amount') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.usage_limit') }}</label>
                    <input type="number" step="1" min="1" name="usage_limit"
                        class="form-control @error('usage_limit') is-invalid @enderror"
                        value="{{ old('usage_limit', $coupon?->usage_limit) }}">
                    @error('usage_limit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.per_user_limit') }}</label>
                    <input type="number" step="1" min="1" name="per_user_limit"
                        class="form-control @error('per_user_limit') is-invalid @enderror"
                        value="{{ old('per_user_limit', $coupon?->per_user_limit) }}">
                    @error('per_user_limit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.starts_at') }}</label>
                    <input type="datetime-local" name="starts_at"
                        class="form-control @error('starts_at') is-invalid @enderror"
                        value="{{ old('starts_at', $coupon?->starts_at?->format('Y-m-d\TH:i')) }}">
                    @error('starts_at') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">{{ __('general.expires_at') }}</label>
                    <input type="datetime-local" name="expires_at"
                        class="form-control @error('expires_at') is-invalid @enderror"
                        value="{{ old('expires_at', $coupon?->expires_at?->format('Y-m-d\TH:i')) }}">
                    @error('expires_at') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
                            {{ old('is_active', $coupon?->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">{{ __('general.is_active') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer mb-5">
            <button type="submit" class="btn btn-outline-primary px-5">{{ __('general.save') }}</button>
            <a href="{{ route('coupons.index') }}" class="btn btn-outline-danger px-5">{{ __('general.cancel') }}</a>
        </div>
    </div>
</div>
