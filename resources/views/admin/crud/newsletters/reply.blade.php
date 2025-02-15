@extends('admin.components.form')
@section('form_action', route('faqs.store'))
@section('form_type', 'POST')
@section('fields_content')

    <div class="page-body">

        <!-- New faq Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">

                    @include('admin.components.alert-error')

                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.create') }} {{ __('general.faqs') }}</h5>

                                        <!-- Normal title input -->
                                        <div class="mb-4 row align-items-center"> <label
                                                class="form-label-title col-sm-3 mb-0">{{ __('general.subject') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="col-sm-9"> <input type="text" name="subject"
                                                    placeholder="{{ __('general.subject') }}"
                                                    class="form-control @error('subject') is-invalid @enderror"
                                                    value="{{ old('subject') }}"> </div>
                                        </div>

                                        <!-- Normal title input -->
                                        <div class="mb-4 row align-items-center"> <label
                                                class="form-label-title col-sm-3 mb-0">{{ __('general.newsletter') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="col-sm-9">
                                                <textarea rows="100" class=" summernote @error('newsletter') is-invalid @enderror" name="{{ 'newsletter' }}"> {!! old('newsletter') !!} </textarea>
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
            <!-- New faq Add End -->
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
