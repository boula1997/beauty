@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'show'])

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4">{{ __('general.code') }}</dt>
                    <dd class="col-sm-8"><code>{{ $coupon->code }}</code></dd>

                    <dt class="col-sm-4">{{ __('general.percentage') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->percentage }}%</dd>

                    <dt class="col-sm-4">{{ __('general.max_discount') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->max_discount ?? '-' }}</dd>

                    <dt class="col-sm-4">{{ __('general.min_order_amount') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->min_order_amount ?? '-' }}</dd>

                    <dt class="col-sm-4">{{ __('general.used_count') }} / {{ __('general.usage_limit') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->used_count ?? 0 }} / {{ $coupon->usage_limit ?? '∞' }}</dd>

                    <dt class="col-sm-4">{{ __('general.per_user_limit') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->per_user_limit ?? '∞' }}</dd>

                    <dt class="col-sm-4">{{ __('general.starts_at') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->starts_at?->format('Y-m-d H:i') ?? '-' }}</dd>

                    <dt class="col-sm-4">{{ __('general.expires_at') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->expires_at?->format('Y-m-d H:i') ?? '-' }}</dd>

                    <dt class="col-sm-4">{{ __('general.is_active') }}</dt>
                    <dd class="col-sm-8">{{ $coupon->is_active ? __('general.active') : __('general.inactive') }}</dd>
                </dl>
            </div>
            <div class="card-footer">
                @can('coupon-edit')
                    <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-outline-primary px-5">{{ __('general.edit') }}</a>
                @endcan
                <a href="{{ route('coupons.index') }}" class="btn btn-outline-secondary px-5">{{ __('general.cancel') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
