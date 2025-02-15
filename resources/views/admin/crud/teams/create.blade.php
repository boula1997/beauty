@extends('admin.components.form')
@section('form_action', route('teams.store'))
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
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.create') }} {{ __('general.teams') }}</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link @if ($key == 0) active @endif"
                                                    id="pills-{{ $locale }}-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-{{ $locale }}"
                                                    type="button">@lang('general.' . $locale)</button>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                                id="pills-{{ $locale }}" role="tabpanel">
                                                <!-- Normal title input -->
                                                <div class="mb-4 row align-items-center"> <label
                                                        class="form-label-title col-sm-3 mb-0">{{ __('general.title') }} -
                                                        @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="col-sm-9"> <input type="text"
                                                            name="{{ $locale . '[title]' }}"
                                                            placeholder="{{ __('general.title') }}"
                                                            class="form-control @error('title') invalid @enderror @error($locale . '.title') is-invalid @enderror"
                                                            value="{{ old($locale . '.title') }}"> </div>
                                                </div>

                                                <!-- Normal title input -->
                                                <div class="mb-4 row align-items-center"> <label
                                                        class="form-label-title col-sm-3 mb-0">{{ __('general.subtitle') }}
                                                        - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="col-sm-9"> <input type="text"
                                                            name="{{ $locale . '[subtitle]' }}"
                                                            placeholder="{{ __('general.subtitle') }}"
                                                            class="form-control @error('subtitle') invalid @enderror @error($locale . '.subtitle') is-invalid @enderror"
                                                            value="{{ old($locale . '.subtitle') }}"> </div>
                                                </div>

                                                <!-- Normal title input -->
                                                <div class="mb-4 row align-items-center"> <label
                                                        class="form-label-title col-sm-3 mb-0">{{ __('general.description') }}
                                                        - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="col-sm-9">
                                                        <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                                            name="{{ $locale . '[description]' }}"> {!! old($locale . '.description') !!} </textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.facebook') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="text" name="facebook"
                                                placeholder="{{ __('general.facebook') }}"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                value="{{ old('facebook') }}"> </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.twitter') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="text" name="twitter"
                                                placeholder="{{ __('general.twitter') }}"
                                                class="form-control @error('twitter') is-invalid @enderror"
                                                value="{{ old('twitter') }}"> </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.instagram') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="text" name="instagram"
                                                placeholder="{{ __('general.instagram') }}"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                value="{{ old('instagram') }}"> </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.linkedin') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="text" name="linkedin"
                                                placeholder="{{ __('general.linkedin') }}"
                                                class="form-control @error('linkedin') is-invalid @enderror"
                                                value="{{ old('linkedin') }}"> </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.created_at') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="datetime-local" id="dateTimeInput"
                                                placeholder="{{ __('general.created_at') }}"
                                                class="form-control @error('created_at') is-invalid @enderror"
                                                value="{{ old('created_at') }}" name="created_at"> </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="mb-4 row align-items-center"> <label
                                            class="form-label-title col-sm-3 mb-0">{{ __('general.updated_at') }} <span
                                                class="text-danger"> * </span></label>
                                        <div class="col-sm-9"> <input type="datetime-local" id="dateTimeInput"
                                                placeholder="{{ __('general.updated_at') }}"
                                                class="form-control @error('updated_at') is-invalid @enderror"
                                                value="{{ old('updated_at') }}" name="updated_at"> </div>
                                    </div>

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
