@extends('admin.layouts.master')

@section('content')
            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>{{ 'general.admins' }}</h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-solid"
                                                        href="{{ route('roles.create') }}">{{ __('general.create') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table id="table_id" class="table role-table all-package theme-table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{ __('general.role') }}</th>
                                              
                                                        <th>{{ __('general.controls') }}</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($roles as $role)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $role->name }}</td>
                                                       
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
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
@endsection