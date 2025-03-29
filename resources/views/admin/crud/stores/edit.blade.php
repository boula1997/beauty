@extends('admin.components.form')
@section('form_action', route('stores.update', $store->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')

        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'stores', 'action' => 'edit'])
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
                                        <label>{{ __('general.title') }}- @lang('general.' . $locale)<span class="text-danger"> *
                                            </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="{{ $locale . '[title]' }}"
                                                placeholder="{{ __('general.title') }}"
                                                class="form-control pl-1 min-h-40px"
                                                value="{{ old($locale . '.title', $store->translate($locale)->title) }}">
                                        </div>
                                        @error($locale . '.title')
                                            <span class="text-danger" >
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-form-group">
                                        <label>{{__('general.description')}}(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                        <textarea rows="100" class="summernote"
                                            name="{{ $locale . '[description]' }}">
                                            {!! old($locale . '.description', $store->translate($locale)->description) !!} 
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
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('general.email') }}<span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="email" placeholder="{{ __('general.email') }}"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('email') is-invalid @enderror"
                                        value="{{ old('email',$store->email) }}">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('general.phone') }}<span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="phone" placeholder="{{ __('general.phone') }}"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('phone') is-invalid @enderror"
                                        value="{{ old('phone',$store->phone) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('general.banner') }}<span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="banner" placeholder="{{ __('general.banner') }}"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('banner') is-invalid @enderror"
                                        value="{{ old('banner',$store->banner) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('general.deliveryCharge') }}<span class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" name="deliveryCharge" placeholder="{{ __('general.deliveryCharge') }}"
                                        class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('deliveryCharge') is-invalid @enderror"
                                        value="{{ old('deliveryCharge',$store->deliveryCharge) }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12 col-sm-12">{{ __('general.categories') }}</label>
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <select class="form-control" id="categorySelect" multiple="multiple" data-live-search="true" name="category_id[]">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                @if(in_array($category->id, old('category_id', $store->categories->pluck('id')->toArray()))) selected @endif>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12 col-sm-12">{{ __('general.brands') }}</label>
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <select class="form-control" id="brandSelect" multiple="multiple" data-live-search="true" name="brand_id[]">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" 
                                                @if(in_array($brand->id, old('brand_id', $store->brands->pluck('id')->toArray()))) selected @endif>
                                                {{ $brand->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.logo'),
                                'value' => old('image',$store->image),
                                'name' => 'image',
                                'id' => 'kt_image_3',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>

                    </div>
                </div>
                <div class="card-footer mb-5 mt-5">
                    <button type="submit" class="btn btn-outline-success">{{ __('general.save') }}</button>
                    <a href="{{ route('stores.index') }}"
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
