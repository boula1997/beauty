@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'index'])

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        @can('coupon-create')
                            <a href="{{ route('coupons.create') }}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                        @endcan
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category">
                                <thead>
                                    <tr>
                                        <th>{{ __('general.code') }}</th>
                                        <th>{{ __('general.discount') }}</th>
                                        <th>{{ __('general.coupon_usage') }}</th>
                                        <th>{{ __('general.valid_period') }}</th>
                                        <th>{{ __('general.status') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($coupons as $coupon)
                                        @php
                                            $state = !$coupon->is_active ? 'inactive'
                                                : ($coupon->expires_at && $coupon->expires_at->isPast() ? 'expired'
                                                : ($coupon->starts_at && $coupon->starts_at->isFuture() ? 'scheduled'
                                                : ($coupon->usage_limit && $coupon->used_count >= $coupon->usage_limit ? 'used_up' : 'active')));
                                            $badge = ['active' => 'bg-success', 'scheduled' => 'bg-info', 'expired' => 'bg-secondary', 'used_up' => 'bg-warning', 'inactive' => 'bg-danger'][$state];
                                        @endphp
                                        <tr>
                                            <td><strong>{{ $coupon->code }}</strong></td>
                                            <td>
                                                {{ rtrim(rtrim(number_format($coupon->percentage, 2), '0'), '.') }}%
                                                @if ($coupon->max_discount)
                                                    <div class="small text-muted">{{ __('general.max_discount') }}: {{ number_format($coupon->max_discount, 2) }} {{ __('general.pound') }}</div>
                                                @endif
                                            </td>
                                            <td>{{ $coupon->used_count ?? 0 }} / {{ $coupon->usage_limit ?: '∞' }}</td>
                                            <td class="small">
                                                {{ $coupon->starts_at?->format('Y-m-d') }} → {{ $coupon->expires_at?->format('Y-m-d') }}
                                            </td>
                                            <td><span class="badge {{ $badge }}">{{ __('general.coupon_state_' . $state) }}</span></td>
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'coupons',
                                                    'role' => 'coupon',
                                                    'module' => $coupon,
                                                ])
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6" class="text-center text-muted">{{ __('general.no_data') }}</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $coupons->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
