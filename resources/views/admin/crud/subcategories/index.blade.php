@extends('admin.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'subcategories', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{route('subcategories.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " id="editableTable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.title')}}</th>
                                        <th>{{__('general.category')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $subcategory->title }}</td>              
                                            <td>{{ $subcategory->category->title }}</td>
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'subcategories',
                                                    'role' => 'subcategory',
                                                    'module' => $subcategory,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $subcategories->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection


