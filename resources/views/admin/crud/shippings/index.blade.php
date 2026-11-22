@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    @include('admin.components.breadcrumb', ['module' => 'shippings', 'action' => 'index'])

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ __('general.shippings_hint') }}</small>
                        @can('shipping-create')
                            <a href="{{ route('shippings.create') }}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                        @endcan
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('general.governorate') }}</th>
                                        <th>{{ __('general.fee') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shippings as $shipping)
                                        <tr>
                                            <td>{{ $loop->iteration + ($shippings->currentPage() - 1) * $shippings->perPage() }}</td>
                                            <td>{{ $shipping->title }}</td>
                                            <td>{{ number_format($shipping->fee, 2) }} {{ __('general.pound') }}</td>
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'shippings',
                                                    'role' => 'shipping',
                                                    'module' => $shipping,
                                                ])
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="text-center text-muted">{{ __('general.no_data') }}</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $shippings->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
