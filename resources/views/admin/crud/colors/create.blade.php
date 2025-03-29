@extends('admin.components.form')
@section('form_action', route('colors.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'colors', 'action' => 'create'])
                </div>
                <div class="card-toolbar px-3">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <li class="nav-item">
                                <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                    href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">

                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="form-group">
                                    <label>{{ __('general.title') }}- @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[title]' }}"
                                            placeholder="{{ __('general.title') }}"
                                            class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                            value="{{ old($locale . '.title') }}">
                                    </div>
                                </div>
                                @error($locale . '.title')
                                    <span class="text-danger" >
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="color" class="form-label fw-bold text-gray-700"> {{ __('general.hexCode') }}</label>
                                <div class="d-flex align-items-center">
                                    <input type="color" id="color" name="hexCode" class="form-control form-control-color me-2" value="{{ old('backgroundColor', '#000000') }}" style="width: 60px; height: 40px; border: none; cursor: pointer;">
                                    <span id="colorValue" class="border rounded px-3 py-2 text-gray-700 bg-gray-100">{{ old('hexCode', '#000000') }}</span>
                                </div>
                            </div>
                            @error('hexCode')
                                <span class="text-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.stores') }}</label>
                                <select class="form-select form-select-lg" name="store_id" id="store">
                                    <option value="">{{ __('general.select_store') }}</option>

                                    @foreach ($stores as $store)
                                        <option value="{{ $store->id }}"
                                            {{ old('store_id') == $store->id ? 'selected' : '' }}>
                                            {{ $store->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('store_id')
                                <span class="text-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit"
                        class="btn btn-outline-primary px-5
                          ">{{ __('general.save') }}</button>
                    <a href="{{ route('colors.index') }}"
                        class="btn btn-outline-danger px-5
                            ">{{ __('general.cancel') }}</a>
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
        <script>
            document.getElementById('color').addEventListener('input', function() {
                document.getElementById('colorValue').textContent = this.value;
            });
        </script>
    @endpush

@endsection
