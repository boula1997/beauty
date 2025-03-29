@extends('admin.layouts.master')

@section('content')
    <div class="page-body" >

        @include('admin.components.breadcrumb', [
        'module' => 'admins', 
        'action' => 'index',     
        ])

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  d-flex justify-content-end">
                            <a href="{{route('admins.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table list-digital all-package table-category " id="editableTable">
                                    
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('general.image')}}</th>
                                            <th>{{__('general.name')}}</th>
                                            <th>{{__('general.email')}}</th>
                                            <th>{{__('general.phone')}}</th>
                                            <th>{{__('general.role')}}</th>
                                            <th>{{__('general.controls')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $admin)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td><img src="{{ $admin->image}}"
                                                    alt="{{ $admin->name }}"></td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->phone }}</td> 
                                                <td>
                                                    @if (!empty($admin->getRoleNames()))
                                                        @foreach ($admin->getRoleNames() as $v)
                                                            <label
                                                                class="  badge-success ">{{ __('general.' . $v)}}</label>
                                                        @endforeach
                                                    @endif
                                                </td>           
                                    
                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'admins',
                                                        'role' => 'admin',
                                                        'module' => $admin,
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach

                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {!! $data->links('admin.components.paginate') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

