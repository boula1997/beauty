@extends('admin.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'roles', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div>
                        </form>

                        <a href="{{route('roles.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " id="editableTable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.name')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ __('general.'.$role->name)}}</td>             
                                         
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'roles',
                                                    'role' => 'role',
                                                    'module' => $role,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $roles->render() !!}
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

