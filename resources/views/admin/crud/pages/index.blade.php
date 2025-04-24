@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        @include('admin.components.breadcrumb', [
            'module' => 'pages',
            'action' => 'index',
        ])

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        @can('page-create')    
                            <div class="card-header  d-flex justify-content-end">
                                <a href="{{ route('pages.create') }}"
                                    class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                            </div>
                        @endcan

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table list-digital all-package table-category " id="editableTable">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('general.image') }}</th>
                                            <th>{{ __('general.title') }}</th>
                                            <th>{{ __('general.controls') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $page)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="100" height="50"
                                                    src="{{ isset($page->images[0]->url)?$page->images[0]->url:asset('default.jpg')  }}"
                                                    alt="{{ $page->title }}">
                                                </td>
                                                <td>{{ $page->title }}</td>

                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'pages',
                                                        'role' => 'page',
                                                        'module' => $page,
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
