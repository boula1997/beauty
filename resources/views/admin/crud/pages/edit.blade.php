@extends('admin.components.form')
@section('form_action', route('pages.update', $page->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <div class="page-body">

        <!-- New page Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">

                    @include('admin.components.alert-error')

                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.edit') }} {{ __('general.pages') }}</h5>
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
                                                            value="{{ old($locale . '.title', $page->translate($locale)->title) }}"> </div>
                                                </div>

                                                <!-- Normal title input -->
                                                <div class="mb-4 row align-items-center"> <label
                                                        class="form-label-title col-sm-3 mb-0">{{ __('general.subtitle') }}
                                                        - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="col-sm-9"> <input type="text"
                                                            name="{{ $locale . '[subtitle]' }}"
                                                            placeholder="{{ __('general.subtitle') }}"
                                                            class="form-control @error('subtitle') invalid @enderror @error($locale . '.subtitle') is-invalid @enderror"
                                                            value="{{ old($locale . '.subtitle', $page->translate($locale)->subtitle) }}">
                                                    </div>
                                                </div>

                                                <!-- Normal title input -->
                                                <div class="mb-4 row align-items-center"> <label
                                                        class="form-label-title col-sm-3 mb-0">{{ __('general.description') }}
                                                        - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="col-sm-9">
                                                        <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                                            name="{{ $locale . '[description]' }}"> {!! old($locale . '.description', $page->translate($locale)->description) !!} </textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Image Input --}} 
                                    <div class="row">
                                        <div class="col-md-6"> @include('admin.components.image', [
                                            'label' => __('general.image'),
                                            'value' => old('image', $page->image),
                                            'name' => 'image',
                                            'id' => 'kt_image_3',
                                            'accept' => 'image/*',
                                            'required' => true,
                                        ]) </div>

                                        <div class="col-md-6">
                                            @include('admin.components.icon', [
                                                'label' => 'icon',
                                                'required' => true,
                                                'value' => 'fas fa-desktop',
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
        <!-- New page Add End -->
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
