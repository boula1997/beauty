@extends('admin.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'stores', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{route('stores.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " id="editableTable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.image')}}</th>
                                        <th>{{__('general.title')}}</th>
                                        <th>{{__('general.email')}}</th>
                                        <th>{{__('general.phone')}}</th>
                                        <th>{{__('general.deliveryCharge')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stores as $store)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ $store->image }}"
                                                    alt="{{ $store->title }}"></td>
                                            <td>{{ $store->title }}</td>              
                                            <td>{{ $store->email }}</td>              
                                            <td>{{ $store->phone }}</td>              
                                            <td>{{ $store->deliveryCharge }}</td>              
                             
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'stores',
                                                    'role' => 'store',
                                                    'module' => $store,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $stores->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

