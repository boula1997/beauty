@extends('merchant.components.form')
{{-- @section('form_action', route('merchant.update.profile', auth('merchant')->user()->id))
@section('form_type', 'POST') --}}
@section('fields_content')

    <div class="content-wrapper">
        
        @method('PUT')
        <!-- Main content -->
        <section class="content">
            {{-- @include('admin.components.alert-error') --}}

            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card tab2-card">
                            <div class="card-header card-header-tabs-line">
                                @include('merchant.components.breadcrumb', ['module' => 'merchant.profile', 'action' => 'edit'])
                            </div>
                                                 
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="top-profile-tab"
                                                    data-bs-toggle="tab" href="#top-profile" role="tab"
                                                    aria-controls="top-profile" aria-selected="true"><i data-feather="user"
                                                        class="me-2"></i>Profile Info</a>
                                            </li>

                                            <li class="nav-item"><a class="nav-link" id="email-top-tab"
                                                data-bs-toggle="tab" href="#top-email" role="tab"
                                                aria-controls="top-email" aria-selected="false"><i
                                                    data-feather="settings" class="me-2"></i>Update Email</a>
                                            </li>

                                            <li class="nav-item"><a class="nav-link" id="contact-top-tab"
                                                    data-bs-toggle="tab" href="#top-contact" role="tab"
                                                    aria-controls="top-contact" aria-selected="false"><i
                                                        data-feather="settings" class="me-2"></i>Change Password</a>
                                            </li>

                                   
                                        </ul>
                                        <div class="tab-content" id="top-tabContent">
                                            <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                                aria-labelledby="top-profile-tab">
                                                <h5 class="f-w-600">Profile Information</h5>
                                                <form method="POST" action="{{ route('merchant.update.profile')}}">
                                                    @csrf
                                                    @method('PUT')
                                            
                                                    <div class="form-group">
                                                        <label for="first_name">First Name:</label>
                                                        <input type="text" name="first_name" class="form-control" 
                                                            value="{{ auth('merchant')->user()->first_name }}" required>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name:</label>
                                                        <input type="text" name="last_name" class="form-control" 
                                                            value="{{ auth('merchant')->user()->last_name }}" required>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="phone">Phone:</label>
                                                        <input type="text" name="phone" class="form-control" 
                                                            value="{{ auth('merchant')->user()->phone }}" required>
                                                    </div>
                                            
                                                    <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                                                </form>
                                            </div>
                                        

                                            <div class="tab-pane fade" id="top-email" role="tabpanel"
                                                aria-labelledby="email-top-tab">
                                              
                                                <div class="account-setting deactivate-account">
                                                    <h5 class="f-w-600">Deactivate Account</h5>
                                                    <div class="row">
                                                        <div class="col">
                                                          
                                                            <label class="d-block" for="edo-ani1">
                                                                <input class="radio_animated" id="edo-ani1" type="radio"
                                                                    name="rdo-ani">
                                                                This is temporary
                                                            </label>
                                                        
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary">Deactivate
                                                        Account</button>
                                                </div>
                                           
                                            </div>

                                               <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                                aria-labelledby="contact-top-tab">
                                                <h5 class="f-w-600">Change Password</h5>
                                                <form method="POST" action="{{ route('merchant.update.password', auth('merchant')->user()->id) }}">
                                                    @csrf
                                            
                                                    <div class="form-group">
                                                        <label for="current_password">Current Password:</label>
                                                        <input type="password" name="current_password" class="form-control" required>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="new_password">New Password:</label>
                                                        <input type="password" name="new_password" class="form-control" required>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="confirm_password">Confirm New Password:</label>
                                                        <input type="password" name="confirm_password" class="form-control" required>
                                                    </div>
                                            
                                                    <button type="submit" class="btn btn-primary mt-3">Change Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                       
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container-fluid -->
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

@endpush
