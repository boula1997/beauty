@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'roles', 
        'action' => 'show',     
    ])

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="card card-custom mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('general.name')}}</strong>
                                    {{ $role->name }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($rolePermissions as $v)
                                
                                <div class="col-md-3">
                                    <div
                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <label class="" for="customSwitch">{{ __('general.'.$v->name)}}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
