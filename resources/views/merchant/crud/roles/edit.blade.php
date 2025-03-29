@extends('admin.components.form')
@section('form_action', route('roles.update', $role->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', [
                                    'module' => 'roles',
                                    'action' => 'edit',
                                ])
                            </div>
                            <div class="card-header">
                                <h1 class="card-title fw-bold"> @lang('general.create') @lang('general.user')</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <div class="row p-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.name'):</strong>
                                        {!! Form::text('name', old('name', $role->name), ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.permission'):</strong>
                                        @include('admin.components.selectAll',['on'=>'success','off'=>'danger'] )

                                        <br />
                                        <div class="row">
                                            @foreach ($permission as $value)
                                                <div class="col-md-3">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" @checked(in_array($value->id, $rolePermissions) ? true : false)
                                                            name="permission[]" value="{{ $value->id }}"
                                                            class="custom-control-input"
                                                            id="customSwitch{{ $value->id }}">
                                                        <label class="custom-control-label"
                                                            for="customSwitch{{ $value->id }}">{{ $value->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-primary px-5 mb-5 w-25
                                        ">@lang('general.save')</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        $(document).ready(function () {
    // Create a map to store grouped permissions based on name patterns
    let groupedPermissions = {};

    // Loop through each permission checkbox and group them based on their name similarity
    $("div.custom-control").each(function () {
        let permissionElement = $(this); // Reference to the current permission element
        let permissionName = permissionElement.find("label").html().trim();

        // Group by the first part of the permission name (e.g., user-create -> user)
        let groupName = permissionName.split('-')[0];

        if (!groupedPermissions[groupName]) {
            groupedPermissions[groupName] = [];
        }
        groupedPermissions[groupName].push(permissionElement);
    });

    // Create a new container for grouped permissions
    let groupedContainer = $('<div class="row grouped-permissions"></div>');

    // Loop through the groupedPermissions object and create square cards for each group
    $.each(groupedPermissions, function (groupName, permissions) {
        // Create a square card for each group with grid layout
        let groupCard = $(`
            <div class="col-md-4 mb-4">
                <div class="card border-primary h-100">
                    <div class="card-header bg-primary text-white text-center">
                        ${groupName.charAt(0).toUpperCase() + groupName.slice(1)} Permissions
                    </div>
                    <div class="card-body">
                        <!-- Group-specific "Select All" Checkbox -->
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

        // Append each permission checkbox to the grid layout inside the card body
        permissions.forEach(permission => {
            groupCard.find('.permission-grid').append(
                $('<div class="col-6 mb-2 text-center"></div>').append(permission)
            );
        });

        // Append the square card to the grouped container
        groupedContainer.append(groupCard);
    });

    // Add the global "Select All" option above the permissions group
    let selectAllOption = $(`
        <div class="col-12 mb-3 text-center">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="selectAllGlobal">
                <label class="custom-control-label" for="selectAllGlobal">
                    Select All Permissions
                </label>
            </div>
        </div>
    `);

    // Insert the "Select All" option before the grouped permissions container
    $('.form-group').prepend(selectAllOption);

    // Replace the existing permissions container with the new grouped container
    $('.form-group .row').replaceWith(groupedContainer);

    // Event listener for the global "Select All" checkbox
    $('#selectAllGlobal').on('change', function () {
        let isChecked = $(this).prop('checked');

        // Select or Deselect all checkboxes across all permission groups
        $('.grouped-permissions .custom-control-input').prop('checked', isChecked);

        // Update all group-specific checkboxes based on global selection
        $('.selectAllGroup').prop('checked', isChecked);
    });

    // Event listener for group-specific "Select All" checkboxes
    $('.selectAllGroup').on('change', function () {
        let isChecked = $(this).prop('checked');

        // Select or Deselect all checkboxes in the corresponding group
        $(this).closest('.card-body').find('.permission-grid .custom-control-input').prop('checked', isChecked);
    });
});

    </script>
@endpush
