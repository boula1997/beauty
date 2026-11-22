@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'show'])
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    @foreach ([
                        'code' => $coupon->code,
                        'discount' => rtrim(rtrim(number_format($coupon->percentage, 2), '0'), '.') . '%',
                        'max_discount' => $coupon->max_discount ? number_format($coupon->max_discount, 2) . ' ' . __('general.pound') : '—',
                        'min_order_amount' => $coupon->min_order_amount ? number_format($coupon->min_order_amount, 2) . ' ' . __('general.pound') : '—',
                        'coupon_usage' => ($coupon->used_count ?? 0) . ' / ' . ($coupon->usage_limit ?: '∞'),
                        'per_user_limit' => $coupon->per_user_limit ?: '—',
                        'starts_at' => $coupon->starts_at?->format('Y-m-d H:i'),
                        'expires_at' => $coupon->expires_at?->format('Y-m-d H:i'),
                        'status' => $coupon->is_active ? __('general.active') : __('general.coupon_state_inactive'),
                    ] as $label => $value)
                        <div class="col-md-4">
                            <h6 class="text-muted mb-1">{{ __('general.' . $label) }}</h6>
                            <p class="mb-0">{{ $value }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                @can('coupon-edit')
                    <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-outline-primary px-4">{{ __('general.edit') }}</a>
                @endcan
                <a href="{{ route('coupons.index') }}" class="btn btn-outline-secondary px-4">{{ __('general.back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
