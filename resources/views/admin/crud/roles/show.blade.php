@extends('admin.components.form')
@section('form_action', '')
@section('form_type', '')
@section('fields_content')

    <div class="page-body">
        <div class="row theme-form">
            <div class="col-12">
                @include('admin.components.alert-error')

                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>{{ __('general.show') }} {{ __('general.roles') }}</h5>
                                </div>

                                <div class="row">
                                    {{-- 1. اسم الدور --}}
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{ $role->name }}" disabled />
                                        </div>
                                    </div>

                                    {{-- 2. العنوان الخاص بالصلاحيات --}}
                                    <div class="mb-3">
                                        <h4 class="form-label-title">Permissions</h4>
                                    </div>

                                    {{-- 3. عرض الصلاحيات --}}
                                    <div class="row g-sm-4 g-2">
                                        <div class="col-xl-12">
                                            <div class="row roles-form">
                                                <div class="col-12">
                                                    
                                                    {{-- 4. عرض الصلاحيات التي يمتلكها الدور --}}
                                                    <ul class="list-unstyled" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
                                                        @foreach($permissions as $permission)
                                                            <li>
                                                                <input class="form-check-input" type="checkbox" 
                                                                       id="perm_{{ $permission->id }}" disabled 
                                                                       {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} />
                                                                <label class="form-check-label m-0" for="perm_{{ $permission->id }}">
                                                                    {{ ucfirst($permission->name) }}
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 5. زر العودة --}}
                                    <div class="card-submit-button mt-4">
                                        <a class="btn btn-animation ms-auto" href="{{ route('roles.index') }}">
                                            {{ __('general.back') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
