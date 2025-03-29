@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        @include('admin.components.breadcrumb', [
            'module' => 'banners',
            'action' => 'index',
        ])

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  d-flex justify-content-end">
                            <a href="{{ route('banners.create') }}"
                                class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table list-digital all-package table-category " id="editableTable">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('general.image') }}</th>
{{--                                            <th>{{ __('general.store') }}</th>--}}
                                            <th>{{ __('general.type') }}</th>
                                            <th>{{ __('general.category') }}</th>
                                            <th>{{ __('general.controls') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $banner->image }}" alt="{{ optional($banner->getCategory)->title }}"></td>
{{--                                                <td>{{ $banner->store->title }}</td>--}}
                                                @if($banner->type == 1)
                                                    <td>@lang('general.banner_category')</td>
                                                @elseif($banner->type == 2)
                                                    <td>@lang('general.banner_flash_sale')</td>
                                                @endif
                                                <td>{{ optional($banner->getCategory)->title }}</td>
                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'banners',
                                                        'role' => 'banner',
                                                        'module' => $banner,
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {!! $banners->links('admin.components.paginate') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
