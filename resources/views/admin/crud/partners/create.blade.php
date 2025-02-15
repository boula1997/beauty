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
                                                <div class="form-group"> <label>{{ __('general.title') }} -
                                                        @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"> <span class="input-group-text"><i
                                                                    class="fas fa-pen"></i></span> </div> <input
                                                            type="text" name="{{ $locale . '[title]' }}"
                                                            placeholder="{{ __('general.title') }}"
                                                            class="form-control @error('title') invalid @enderror pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                                            value="{{ old($locale . '.title') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group"> <label>{{ __('general.subtitle') }} -
                                                        @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"> <span class="input-group-text"><i
                                                                    class="fas fa-pen"></i></span> </div> <input
                                                            type="text" name="{{ $locale . '[subtitle]' }}"
                                                            placeholder="{{ __('general.subtitle') }}"
                                                            class="form-control @error('subtitle') invalid @enderror pl-1 min-h-40px @error($locale . '.subtitle') is-invalid @enderror"
                                                            value="{{ old($locale . '.subtitle') }}">
                                                    </div>
                                                </div>

                                                <div class="col-form-group">
                                                    <label>{{ __('general.description') }}(@lang('general.' . $locale))<span
                                                            class="text-danger"></span></label>
                                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                                        name="{{ $locale . '[description]' }}"> {!! old($locale . '.description') !!} </textarea>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="col-md-12">
                                        <div class="form-group"> <label>{{ __('general.facebook') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-pen"></i></span> </div> <input type="text"
                                                    name="facebook" placeholder="{{ __('general.facebook') }}"
                                                    class="form-control pl-1 min-h-40px @error('facebook') is-invalid @enderror"
                                                    value="{{ old('facebook') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="col-md-12">
                                        <div class="form-group"> <label>{{ __('general.twitter') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-pen"></i></span> </div> <input type="text"
                                                    name="twitter" placeholder="{{ __('general.twitter') }}"
                                                    class="form-control pl-1 min-h-40px @error('twitter') is-invalid @enderror"
                                                    value="{{ old('twitter') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="col-md-12">
                                        <div class="form-group"> <label>{{ __('general.instagram') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-pen"></i></span> </div> <input type="text"
                                                    name="instagram" placeholder="{{ __('general.instagram') }}"
                                                    class="form-control pl-1 min-h-40px @error('instagram') is-invalid @enderror"
                                                    value="{{ old('instagram') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Normal title input -->
                                    <div class="col-md-12">
                                        <div class="form-group"> <label>{{ __('general.linkedin') }} <span
                                                    class="text-danger"> * </span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-pen"></i></span> </div> <input type="text"
                                                    name="linkedin" placeholder="{{ __('general.linkedin') }}"
                                                    class="form-control pl-1 min-h-40px @error('linkedin') is-invalid @enderror"
                                                    value="{{ old('linkedin') }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Date and Time input --}} <div class="col-md-6">
                                        <div class="form-group"> <label
                                                for="dateTimeInput">{{ __('general.created_at') }} <span
                                                    class="text-danger"> *</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-calendar-alt"></i></span> </div> <input
                                                    type="datetime-local" id="dateTimeInput" class="form-control"
                                                    value="{{ old('created_at') }}" name="created_at">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Date and Time input --}} <div class="col-md-6">
                                        <div class="form-group"> <label
                                                for="dateTimeInput">{{ __('general.updated_at') }} <span
                                                    class="text-danger"> *</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text"><i
                                                            class="fas fa-calendar-alt"></i></span> </div> <input
                                                    type="datetime-local" id="dateTimeInput" class="form-control"
                                                    value="{{ old('updated_at') }}" name="updated_at">
                                            </div>
                                        </div>
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
