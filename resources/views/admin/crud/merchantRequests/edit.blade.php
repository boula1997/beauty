@extends('admin.components.form')
@section('form_action', route('brands.update', $brand->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')

        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'brands', 'action' => 'edit'])
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('general.title') }}- @lang('general.' . $locale)<span class="col-form-label pt-0"> *
                                            </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="{{ $locale . '[title]' }}"
                                                placeholder="{{ __('general.title') }}"
                                                class="form-control pl-1 min-h-40px"
                                                value="{{ old($locale . '.title', $brand->translate($locale)->title) }}">
                                        </div>
                                    </div>
                                    @error($locale . '.title')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="col-form-group">
                                        <label>{{__('general.description')}}(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                        <textarea rows="100" class="summernote"
                                            name="{{ $locale . '[description]' }}">
                                            {!! old($locale . '.description', $brand->translate($locale)->description) !!} 
                                        </textarea>
                                    </div>
                                    @error($locale . '.description')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="digital-add needs-validation ">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    @include('admin.components.image', [
                                        'label' => __('general.image'),
                                        'value' => old('image',$brand->image),
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
                    <a href="{{ route('brands.index') }}"
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
