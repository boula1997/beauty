@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    @include('admin.components.breadcrumb', [
        'module' => 'coupons',
        'action' => 'index',
    ])

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
                                        <th>#</th>
                                        <th>{{ __('general.code') }}</th>
                                        <th>{{ __('general.percentage') }}</th>
                                        <th>{{ __('general.used_count') }} / {{ __('general.usage_limit') }}</th>
                                        <th>{{ __('general.starts_at') }}</th>
                                        <th>{{ __('general.expires_at') }}</th>
                                        <th>{{ __('general.is_active') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><code>{{ $coupon->code }}</code></td>
                                            <td>{{ $coupon->percentage }}%</td>
                                            <td>{{ $coupon->used_count ?? 0 }} / {{ $coupon->usage_limit ?? '∞' }}</td>
                                            <td>{{ $coupon->starts_at?->format('Y-m-d H:i') ?? '-' }}</td>
                                            <td>{{ $coupon->expires_at?->format('Y-m-d H:i') ?? '-' }}</td>
                                            <td>
                                                <span class="badge {{ $coupon->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ $coupon->is_active ? __('general.active') : __('general.inactive') }}
                                                </span>
                                            </td>
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'coupons',
                                                    'role' => 'coupon',
                                                    'module' => $coupon,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach
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
