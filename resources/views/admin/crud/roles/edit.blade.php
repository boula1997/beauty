@extends('admin.components.form')
@section('form_action', route('roles.update', $role->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')

    <style>
        .grouped-permissions {
            margin-top: 20px;
        }

        .grouped-permissions .card {
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
            border: none;
        }

        .grouped-permissions .card:hover {
            transform: translateY(-6px);
        }

        .grouped-permissions .card-header {
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
            padding: 15px 20px;
            text-transform: capitalize;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .permission-grid .custom-control {
            background-color: #f8f9fa;
            padding: 12px 8px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #dee2e6;
            transition: background-color 0.2s;
        }

        .permission-grid .custom-control:hover {
            background-color: #e9ecef;
        }

        .custom-checkbox .custom-control-label {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .selectAllGroup + label,
        #selectAllGlobal + label {
            font-size: 0.95rem;
            font-weight: 600;
            color: #495057;
        }
    </style>

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', ['module' => 'roles', 'action' => 'edit'])
                            </div>
                            <div class="row p-4 mb-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.name'):</strong>
                                        {!! Form::text('name', old('name', $role->name), ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Global Select All -->
                                <div class="col-12 mb-4 text-center">
                                    <div class="custom-control custom-checkbox d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="selectAllGlobal">
                                        <label class="custom-control-label" for="selectAllGlobal">
                                            @lang('general.select_all_permissions')
                                        </label>
                                    </div>
                                </div>

                                <!-- Permissions Placeholder -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row" id="permissionsRaw">
                                            @foreach ($permission as $value)
                                                <div class="col-md-3">
                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" name="permission[]"
                                                            value="{{ $value->id }}" class="custom-control-input"
                                                            id="customSwitch{{ $value->id }}"
                                                            @checked(in_array($value->id, $rolePermissions))>
                                                        <label class="custom-control-label"
                                                            for="customSwitch{{ $value->id }}">{{ $value->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary px-5">
                                        @lang('general.save')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        let groupedPermissions = {};
        let processedPermissions = new Set();

        $("#permissionsRaw .custom-control").each(function () {
            let permissionElement = $(this);
            let permissionName = permissionElement.find("label").text().trim();
            let groupName = permissionName.split('-')[0];

            if (!groupedPermissions[groupName]) {
                groupedPermissions[groupName] = [];
            }

            // Avoid duplicates
            if (!processedPermissions.has(permissionName)) {
                groupedPermissions[groupName].push(permissionElement);
                processedPermissions.add(permissionName);
            }
        });

        let groupedContainer = $('<div class="row grouped-permissions"></div>');

        $.each(groupedPermissions, function (groupName, permissions) {
            let groupCard = $(`
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-white text-center bg-primary">
                            ${groupName.charAt(0).toUpperCase() + groupName.slice(1)} Permissions
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-checkbox mb-3 text-center">
                                <input type="checkbox" class="custom-control-input selectAllGroup" id="selectAllGroup${groupName}">
                                <label class="custom-control-label" for="selectAllGroup${groupName}">
                                    Select All in ${groupName}
                                </label>
                            </div>
                            <div class="permission-grid row"></div>
                        </div>
                    </div>
                </div>
            `);

            permissions.forEach(permission => {
                groupCard.find('.permission-grid').append(
                    $('<div class="col-6 mb-2 text-center"></div>').append(permission)
                );
            });

            groupedContainer.append(groupCard);
        });

        $('#permissionsRaw').replaceWith(groupedContainer);

        $('#selectAllGlobal').on('change', function () {
            let isChecked = $(this).prop('checked');
            $('.grouped-permissions .custom-control-input').prop('checked', isChecked);
            $('.selectAllGroup').prop('checked', isChecked);
        });

        $(document).on('change', '.selectAllGroup', function () {
            let isChecked = $(this).prop('checked');
            $(this).closest('.card-body').find('.permission-grid .custom-control-input').prop('checked', isChecked);
        });
    });
</script>
@endpush
