@extends('admin.components.form') 
@section('form_action', route('chooseUss.update', $chooseUs->id))
@section('form_type', 'POST')

@section('fields_content')
    @method('PUT')  
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', ['module' => 'chooseUss', 'action' => 'edit'])
                            </div>
                            <div class="card-toolbar px-3">
                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($key == 0) active @endif" data-toggle="tab"
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
                                                <label>{{ __('general.title') }} - @lang('general.' . $locale)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                    </div>
                                                    <input type="text" 
                                                           name="{{ $locale . '[title]' }}"
                                                           placeholder="{{ __('general.title') }}"
                                                           class="form-control @error($locale . '.title') is-invalid @enderror"
                                                           value="{{ old($locale . '.title', $chooseUs->translate($locale)->title) }}">
                                                </div>
                                                @error($locale . '.title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>{{ __('general.description') }} (@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                                <textarea rows="5" 
                                                          class="summernote bg-light @error($locale . '.description') is-invalid @enderror"
                                                          name="{{ $locale . '[description]' }}">{!! old($locale . '.description', $chooseUs->translate($locale)->description) !!}</textarea>
                                                @error($locale . '.description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card card-custom">
                            <div class="card-body mb-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-form-label pt-0">
                                            <label>{{ __('general.emoji') }}<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="text" 
                                                       name="emoji" 
                                                       placeholder="{{ __('general.emoji') }}"
                                                       class="form-control"
                                                       value="{{ old('emoji', $chooseUs->emoji) }}">
                                            </div>
                                            @error('emoji')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mb-5 mt-5">
                            <button type="submit" class="btn btn-outline-success">{{ __('general.save') }}</button>
                            <a href="{{ route('chooseUss.index') }}" class="btn btn-outline-danger font-weight-bold">{{ __('general.cancel') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script>
            $(function() {
                $('.summernote').summernote()
            })
        </script>
    @endpush
@endsection
