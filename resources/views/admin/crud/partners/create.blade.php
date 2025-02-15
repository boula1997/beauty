@extends('admin.components.form')
@section('form_action', route('partners.store'))
@section('form_type', 'POST')
@section('fields_content')

    <div class="page-body">

        <!-- New team Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">

                    @include('admin.components.alert-error')

                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    {{-- Image Input --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.components.image', [
                                                'label' => __('general.image'),
                                                'value' => old('image'),
                                                'name' => 'image',
                                                'id' => 'kt_image_3',
                                                'accept' => 'image/*',
                                                'required' => true,
                                            ]) 
                                        </div>
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
        <!-- New team Add End -->
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
