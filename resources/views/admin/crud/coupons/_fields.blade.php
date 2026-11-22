{{-- Shared create/edit fields. Expects optional $coupon. --}}
@php
    $val = fn ($field, $default = '') => old($field, isset($coupon) ? $coupon->{$field} : $default);
    $date = fn ($field, $default = null) => old($field, isset($coupon) && $coupon->{$field} ? $coupon->{$field}->format('Y-m-d\TH:i') : $default);
@endphp
<div class="card card-custom">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">{{ __('general.code') }}<span class="text-danger"> *</span></label>
                <input type="text" name="code" class="form-control text-uppercase @error('code') is-invalid @enderror" value="{{ $val('code') }}" placeholder="SALE10">
                <small class="text-muted">{{ __('general.coupon_code_hint') }}</small>
                @error('code')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.discount') }} (%)<span class="text-danger"> *</span></label>
                <input type="number" step="0.01" min="1" max="100" name="percentage" class="form-control @error('percentage') is-invalid @enderror" value="{{ $val('percentage') }}">
                @error('percentage')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.max_discount') }} ({{ __('general.pound') }})</label>
                <input type="number" step="0.01" min="0" name="max_discount" class="form-control @error('max_discount') is-invalid @enderror" value="{{ $val('max_discount') }}">
                <small class="text-muted">{{ __('general.optional_no_limit') }}</small>
                @error('max_discount')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.min_order_amount') }} ({{ __('general.pound') }})</label>
                <input type="number" step="0.01" min="0" name="min_order_amount" class="form-control @error('min_order_amount') is-invalid @enderror" value="{{ $val('min_order_amount') }}">
                <small class="text-muted">{{ __('general.optional_no_limit') }}</small>
                @error('min_order_amount')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.usage_limit') }}</label>
                <input type="number" min="1" name="usage_limit" class="form-control @error('usage_limit') is-invalid @enderror" value="{{ $val('usage_limit') }}">
                <small class="text-muted">{{ __('general.usage_limit_hint') }}</small>
                @error('usage_limit')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.per_user_limit') }}</label>
                <input type="number" min="1" name="per_user_limit" class="form-control @error('per_user_limit') is-invalid @enderror" value="{{ $val('per_user_limit') }}">
                <small class="text-muted">{{ __('general.optional_no_limit') }}</small>
                @error('per_user_limit')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.starts_at') }}<span class="text-danger"> *</span></label>
                <input type="datetime-local" name="starts_at" class="form-control @error('starts_at') is-invalid @enderror" value="{{ $date('starts_at', now()->format('Y-m-d\TH:i')) }}">
                @error('starts_at')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('general.expires_at') }}<span class="text-danger"> *</span></label>
                <input type="datetime-local" name="expires_at" class="form-control @error('expires_at') is-invalid @enderror" value="{{ $date('expires_at', now()->addMonth()->format('Y-m-d\TH:i')) }}">
                @error('expires_at')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-12">
                <div class="form-check form-switch">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ $val('is_active', true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ __('general.active') }}</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer mb-5">
        <button type="submit" class="btn btn-outline-primary px-5">{{ __('general.save') }}</button>
        <a href="{{ route('coupons.index') }}" class="btn btn-outline-danger px-5">{{ __('general.cancel') }}</a>
    </div>
</div>
