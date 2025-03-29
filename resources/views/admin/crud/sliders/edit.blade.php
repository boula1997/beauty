@extends('admin.components.form')
@section('form_action', route('sliders.update', $slider->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')

        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'sliders', 'action' => 'edit'])
                </div>

                <div class="card-body bg-white">
                    <div class="digital-add needs-validation ">
                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    @include('admin.components.image', [
                                        'label' => __('general.image'),
                                        'value' => old('image', $slider->image),
                                        'name' => 'image',
                                        'id' => 'kt_image_3',
                                        'accept' => 'image/*',
                                        'required' => true,
                                    ])

                                </div>
                                @error('image')
                                    <span class="text-danger" >
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-footer mb-5 mt-5">
                    <button type="submit" class="btn btn-outline-success">{{ __('general.save') }}</button>
                    <a href="{{ route('sliders.index') }}"
                        class="btn btn-outline-danger font-weight-bold">{{ __('general.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>


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
@endsection
