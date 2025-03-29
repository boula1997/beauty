@extends('admin.components.form')
@section('form_action', route('contacts.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'contacts', 'action' => 'create'])
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">{{ __('general.type')}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <select class="form-select form-select-lg" name="type" id="">
                                                <option value="" selected>{{ __('general.selectOne')}}</option>
                                                <option value="social">{{ __('general.social')}}</option>
                                                <option value="whatsapp">{{ __('general.whatsapp')}}</option>
                                                <option value="phone">{{ __('general.phone')}}</option>
                                                <option value="email">{{ __('general.email')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.contact')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="contact" value="{{ old('contact') }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputName" placeholder="{{__('general.contact')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.icon', [
                                'label' => 'label' ,
                                'required' => true,
                                'value' => 'fas fa-desktop',
                            ])

                        </div>
                    </div>
                    <div class="card-footer mb-5">
                        <button type="submit"
                            class="btn btn-outline-primary px-5
                          ">{{__('general.save')}}</button>
                        <a href="{{ route('contacts.index') }}"
                            class="btn btn-outline-danger px-5
                            ">{{__('general.cancel')}}</a>
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
