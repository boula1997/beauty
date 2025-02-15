@extends('admin.components.form')
@section('form_action', route('users.store'))
@section('form_type', 'POST')
@section('fields_content')

    <div class="page-body">

        <!-- New user Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">

                    @include('admin.components.alert-error')

                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.create') }} {{ __('general.users') }}</h5>
                                    </div>
<!-- Normal title input --> <div class="mb-4 row align-items-center"> <label class="form-label-title col-sm-3 mb-0">{{ __('general.name') }} <span class="text-danger"> * </span></label> <div class="col-sm-9"> <input type="text" name="name" placeholder="{{ __('general.name') }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"> </div> </div>

<!-- Normal title input --> <div class="mb-4 row align-items-center"> <label class="form-label-title col-sm-3 mb-0">{{ __('general.email') }} <span class="text-danger"> * </span></label> <div class="col-sm-9"> <input type="email" placeholder="{{ __('general.email') }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email"> </div> </div>

<!-- Normal title input --> <div class="mb-4 row align-items-center"> <label class="form-label-title col-sm-3 mb-0">{{ __('general.email_verified_at') }} <span class="text-danger"> * </span></label> <div class="col-sm-9"> <input type="datetime-local" id="dateTimeInput" placeholder="{{ __('general.email_verified_at') }}" class="form-control @error('email_verified_at') is-invalid @enderror" value="{{ old('email_verified_at') }}" name="email_verified_at"> </div> </div>

<!-- Normal title input --> <div class="mb-4 row align-items-center"> <label class="form-label-title col-sm-3 mb-0">{{ __('general.created_at') }} <span class="text-danger"> * </span></label> <div class="col-sm-9"> <input type="datetime-local" id="dateTimeInput" placeholder="{{ __('general.created_at') }}" class="form-control @error('created_at') is-invalid @enderror" value="{{ old('created_at') }}" name="created_at"> </div> </div>

<!-- Normal title input --> <div class="mb-4 row align-items-center"> <label class="form-label-title col-sm-3 mb-0">{{ __('general.updated_at') }} <span class="text-danger"> * </span></label> <div class="col-sm-9"> <input type="datetime-local" id="dateTimeInput" placeholder="{{ __('general.updated_at') }}" class="form-control @error('updated_at') is-invalid @enderror" value="{{ old('updated_at') }}" name="updated_at"> </div> </div>

                                    {{-- Image Input --}} <div class="row">
                                        <div class="col-md-6"> @include('admin.components.image', [
                                            'label' => __('general.image'),
                                            'value' => old('image'),
                                            'name' => 'image',
                                            'id' => 'kt_image_3',
                                            'accept' => 'image/*',
                                            'required' => true,
                                        ]) </div>

                                    </div>
                                </div>

                                <div class="card-submit-button">
                                    <button class="btn btn-animation ms-auto" type="submit">{{__('general.submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New user Add End -->
    </div>

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
