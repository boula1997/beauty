@extends('admin.components.form')
@section('form_action', route('update.profile', auth('admin')->user()->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
        <div class="container p-3">
            @include('admin.components.alert-error')
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
                                        'module' => 'profile',
                                        'action' => 'edit',
                                    ])
                                </div>
                                <!-- /.card-header -->

                                <!-- form start -->
                                <input type="hidden" name="id" value="{{ $admin->id }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.name')}}</label>
                                        <input type="text" name="name" value="{{ old('name', $admin->name) }}"
                                            class="form-control @error('') invalid @enderror" id="exampleInputName" placeholder="{{__('general.name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.email')}}</label>
                                        <input type="email" name="email" value="{{ old('email', $admin->email) }}"
                                            class="form-control @error('') invalid @enderror" id="exampleInputEmail" placeholder="{{__('general.email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.password')}}</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            class="form-control @error('') invalid @enderror" id="exampleInputPassword" placeholder="{{__('general.password')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.confirm_password')}}</label>
                                        <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                            class="form-control @error('') invalid @enderror" id="exampleInputConfirmpassword"
                                            placeholder="{{__('general.confirm_password')}}">
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.components.image', [
                                                'label' => __('general.image'),
                                                'value' => old('image', $admin->image),
                                                'name' => 'image',
                                                'id' => 'kt_image_3',
                                                'accept' => 'image/*',
                                                'required' => true,
                                            ])

                                        </div>
                                    </div>


                                    <div class="card-footer mb-5 mt-5">
                                        <button type="submit"
                                            class="btn btn-outline-primary px-5">{{__('general.save')}}</button>
                                        <a href="{{ route('services.index') }}"
                                            class="btn btn-outline-danger px-5
                                        ">{{__('general.cancel')}}</a>
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
