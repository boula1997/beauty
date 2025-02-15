@extends('admin.components.form')
@section('form_action', route('counters.update', $counter->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">

                    @include('admin.components.alert-error')

                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.edit') }} {{ __('general.products') }}</h5>
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
                                                            value="{{ old($locale . '.title', $counter->translate($locale)->title) }}"> </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-4 row align-items-center"> 
                                            <label
                                                class="form-label-title col-sm-3 mb-0">{{ __('general.count') }}
                                            </label>
                                            <div class="col-sm-9"> <input type="text"
                                                    name="count"
                                                    placeholder="{{ __('general.count') }}"
                                                    class="form-control @error('count') invalid @enderror @error('count') is-invalid @enderror"
                                                    value="{{ old('count',$counter->count) }}">
                                            </div>
                                        </div>
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
        <!-- New Product Add End -->
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
