@extends('admin.components.form')
@section('form_action', route('products.update', $product->id))
@section('form_type', 'POST')
@section('fields_content')
@method('PUT')

    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'products', 
        'action' => 'edit',     
        ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
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
                        <div class="digital-add needs-validation">
                            <div class="tab-content">
                                @foreach (config('translatable.locales') as $key => $locale)
                                    <div class="tab-pane fade show @if ($key == 0) active @endif"
                                        id="{{ $locale }}" role="tabpanel">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0">
                                                <span class="text-danger">*</span> {{ __('general.title') }} - @lang('general.' . $locale)
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="text" 
                                                       id="validationCustom01" 
                                                       name="{{ $locale . '[title]' }}" 
                                                       placeholder="{{ __('general.title') }}" 
                                                       class="form-control @error($locale . '.title') is-invalid @enderror"
                                                       value="{{ old($locale . '.title', $product->translate($locale)->title) }}" 
                                                        >
                                            </div>
                                            @error($locale . '.title')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-form-group ">
                                            <label>{{ __('general.description') }}(@lang('general.' . $locale))<span
                                                    class="text-danger"></span></label>
                                            <textarea rows="5" class="summernote bg-light @error($locale . '.description') is-invalid @enderror"
                                                name="{{ $locale . '[description]' }}">
                                                {!! old($locale . '.description', $product->translate($locale)->description) !!} 
                                            </textarea>
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

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label categories-basic">{{ __('general.categories') }}</label>
                                        <select class="custom-select form-control" name="category_id" id="categories">
                                            <option value="">{{ __('general.select_category') }}</option>

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id',$product->category->id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label categories-basic">{{ __('general.subcategories') }}</label>
                                        <select class="custom-select form-control" name="subcategory_id" id="subcategories">
                                            <option value="">{{ __('general.select_subcategory') }}</option>

                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ old('subcategory_id',$product->subcategory->id) == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('subcategory_id')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.SKU') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="SKU" placeholder="{{ __('general.SKU') }}"
                                                class="form-control"
                                                value="{{ old('SKU',$product->SKU) }}">
                                        </div>
                                    </div>
                                    @error('SKU')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.rate') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="rate" placeholder="{{ __('general.rate') }}"
                                                class="form-control"
                                                value="{{ old('rate',$product->rate) }}">
                                        </div>
                                    </div>
                                    @error('rate')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.price') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="price" placeholder="{{ __('general.price') }}"
                                                class="form-control"
                                                value="{{ old('price',$product->price) }}">
                                        </div>
                                    </div>
                                    @error('price')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.quantity') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="quantity" placeholder="{{ __('general.quantity') }}"
                                                class="form-control"
                                                value="{{ old('quantity',$product->quantity) }}">
                                        </div>
                                    </div>
                                    @error('quantity')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <input type="checkbox" name="is_addition" value="1"
                                    {{ old('is_addition', $product->is_addition) ? 'checked' : '' }}>
                                <label for="is_addition">{{ __('general.is_addition') }}</label>

    
                                   {{-- images --}}
                                <div class="col-md-6">
                                    @include('admin.components.image', [
                                        'label' => __('general.image'),
                                        'value' => old('image', $product->image),
                                        'name' => 'image',
                                        'id' => 'kt_image_3',
                                        'accept' => 'image/*',
                                        'required' => true,
                                    ])

                                    @error('image')
                                        <span class="text-danger" >
                                            {{ $message }}
                                        </span>
                                    @enderror
    
                                </div>
    
                                @include('admin.components.images', ['images' => $images])
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group mb-0">
                                <div class="product-buttons">
                                    <button type="submit" class="btn btn-primary">{{ __('general.save') }}</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-light">{{ __('general.cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
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

    {{-- categories==>subcategories --}}
    <script>
        $(document).ready(function() {
            let old = $('#subcategories').attr('old');
            if (old != null) {
                $('#subcategories').find('option').remove().end();
                var categories_id = $('#categories').val();
                console.log('categories_id', categories_id);

                let url = "{{ route('category.subcategories', [':id']) }}"
                url = url.replace(':id', categories_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);

                        if (data.status == 200) {
                            alert(1);
                            let equal;
                            $('#subcategories').append('<option value="">{{ trans('general.select_subcategory') }}</option>');

                            data.data.companies.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#subcategories').append(option);
                            });

                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }
            $('#categories').on('change', function() {

                $('#subcategories').find('option').remove().end();
                var categories_id = $('#categories').val();

                let url = "{{ route('category.subcategories', [':id']) }}"
                url = url.replace(':id', categories_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {

                        console.log(data.data);
                        let equal;
                        $('#subcategories').append('<option value="">{{ trans('general.select_subcategory') }}</option>');

                        data.data.forEach(element => {
                            let equal = '';
                            if (element.id == old)
                                equal = 'selected';
                            var option =
                                `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                            $('#subcategories').append(option);
                        });



                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });

            });
        });
    </script>

@endpush
