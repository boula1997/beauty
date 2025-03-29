@extends('merchant.components.form')
@section('form_action', route('merchant.products.store'))
@section('form_type', 'POST')
@section('fields_content')

    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'products', 
        'action' => 'create',     
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
                                        </div>
                                        <div class="col-form-group ">
                                            <label>{{ __('general.description') }}(@lang('general.' . $locale))<span
                                                    class="text-danger"></span></label>
                                            <textarea rows="5" class="summernote bg-light @error($locale . '.description') is-invalid @enderror"
                                                name="{{ $locale . '[description]' }}">
                                                {!! old($locale . '.description', $product->translate($locale)->description) !!} 
                                            </textarea>
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
                                        <label for="" class="col-form-label categories-basic">{{ __('general.stores')}}</label>
                                        <select class="custom-select form-control" name="store_id" id="store">
                                            <option value="">{{ __('general.select_store') }}</option>
                                            @foreach ($stores as $store)
                                                <option value="{{ $store->id }}" {{ old('store_id',$product->store->id)==$store->id? 'selected' : '' }}>{{ $store->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label categories-basic">{{ __('general.brands') }}</label>
                                        <select class="custom-select form-control" name="brand_id" id="brands">
                                            <option value="">{{ __('general.select_brand') }}</option>

                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ old('brand_id',$product->brand->id) == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>  
    
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
                                </div>
    
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label categories-basic">{{ __('general.subcategories') }}</label>
                                        <select class="custom-select form-control" name="subcategory_id" id="subcategories">
                                            <option value="">{{ __('general.select_subcategory') }}</option>

                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ old('subcategory_id',optional($product->subcategory)->id) == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.weight') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="weight" placeholder="{{ __('general.weight') }}"
                                                class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('weight') is-invalid @enderror"
                                                value="{{ old('weight',$product->weight) }}">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="col-form-label pt-0">
                                        <label>{{ __('general.SKU') }}<span class="text-danger"> * </span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                            <input type="text" name="SKU" placeholder="{{ __('general.SKU') }}"
                                                class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error('SKU') is-invalid @enderror"
                                                value="{{ old('SKU',$product->SKU) }}">
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Variations Section -->
                                {{-- <div class="col-12">
                                    <h5>{{ __('general.variations') }}</h5>
                                    <table class="table table-bordered" id="variationsTable">
                                        <thead>
                                            <tr>
                                                <th>{{ __('general.size') }}</th>
                                                <th>{{ __('general.color') }}</th>
                                                <th>{{ __('general.price') }}</th>
                                                <th>{{ __('general.quantity') }}</th>
                                                <th>{{ __('general.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->productVariations as $index => $variation)
                                                <tr>
                                                    <td>
                                                        <select name="variations[{{ $index }}][size_id]" class="form-control">
                                                            @foreach ($sizes as $size)
                                                                <option value="{{ $size->id }}" {{ $variation->size_id == $size->id ? 'selected' : '' }}>
                                                                    {{ $size->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="variations[{{ $index }}][color_id]" class="form-control">
                                                            @foreach ($colors as $color)
                                                                <option value="{{ $color->id }}" {{ $variation->color_id == $color->id ? 'selected' : '' }}>
                                                                    {{ $color->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="variations[{{ $index }}][price]" class="form-control" value="{{ $variation->price }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="variations[{{ $index }}][quantity]" class="form-control" value="{{ $variation->quantity }}">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger remove-variation-row"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button" id="addVariationRow" class="btn btn-primary mt-3">{{ __('general.add_variation') }}</button>
                                </div> --}}

                                <div class="col-12">
                                    <h5>{{ __('general.variations') }}</h5>
                                    <table class="table table-bordered" id="variationsTable">
                                        <thead>
                                            <tr>
                                                <th>{{ __('general.size') }}</th>
                                                <th>{{ __('general.color') }}</th>
                                                <th>{{ __('general.price') }}</th>
                                                <th>{{ __('general.quantity') }}</th>
                                            <th>{{ __('general.image') }}</th>

                                                <th>{{ __('general.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product->productVariations as $index => $variation)
                                            <tr>
                                                <td>
                                                    <select name="variations[{{ $index }}][size_id]" class="form-control size-select">
                                                        @foreach ($sizes as $size)
                                                            <option value="{{ $size->id }}" 
                                                                {{ $size->id == $variation->size_id ? 'selected' : '' }}>
                                                                {{ $size->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="variations[{{ $index }}][color_id]" class="form-control color-select">
                                                        @foreach ($colors as $color)
                                                            <option value="{{ $color->id }}" 
                                                                {{ $color->id == $variation->color_id ? 'selected' : '' }}>
                                                                {{ $color->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="variations[{{ $index }}][price]" class="form-control" value="{{ $variation->price }}">
                                                </td>
                                                <td>
                                                    <input type="number" name="variations[{{ $index }}][quantity]" class="form-control" value="{{ $variation->quantity }}">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger remove-variation-row"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            
                                    <!-- Add Variation Button -->
                                    <button type="button" id="addVariationRow" class="btn btn-primary mt-3">{{ __('general.add_variation') }}</button>
                                </div>

                                {{-- offers --}}
                                <div class="col-md-6 mt-5">
                                    <input class="checkbox_animated check-it" type="checkbox" value="1"
                                    id="flexCheckDefault" name="offers" data-id="1" {{ isset($product->productOffer) ? 'checked' : '' }}>
                                    <span class="offer-price">
                                        {{  __('general.offers') }} 
                                    </span>
                                </div>

                                <!-- Offer Details Section -->
                                <div id="offer-section" class="mt-3" style="display: {{ isset($product->productOffer) ? 'block' : 'none' }};">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="startDate">Start Date</label>
                                            <input type="date" class="form-control" name="startDate" id="startDate" 
                                                value="{{ old('startDate',isset($product->productOffer)?$product->productOffer->startDate:null) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="endDate">End Date</label>
                                            <input type="date" class="form-control" name="endDate" id="endDate" 
                                                value="{{ old('endDate',isset($product->productOffer)?$product->productOffer->endDate:null) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="percentage">Discount %</label>
                                            <input type="number" class="form-control" name="percentage" id="percentage" min="1" max="100"
                                                value="{{ old('percentage',isset($product->productOffer)?$product->productOffer->percentage:null) }}" step="0.01">
                                        </div>
                                    </div>
                                </div>

    
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
    
                                </div>
    
                                @include('admin.components.images', ['images' => $images])
    
    
                                {{-- <label class="col-form-label pt-0"> Product Upload</label>
                                <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                                    <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                        <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-adding">
            <div class="col-xl-12">
             
                <div class="card">
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                          
                            <div class="form-group mb-0">
                                <div class="product-buttons">
                                    <button type="submit" class="btn btn-primary" >{{ __('general.save') }}</button>
                                    <a  href="{{ route('merchant.products.index') }}"  class="btn btn-light">{{ __('general.cancel') }}</a>
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
{{-- store==>brands --}}
    <script>
        $(document).ready(function() {
            let old = $('#brands').attr('old');
            if (old != null) {
                $('#brands').empty();
                var store_id = $('#store').val();
                console.log('store_id', store_id);

                let url = "{{ route('store.brands', [':id']) }}";
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);
                        // أضف الخيار فقط إذا لم يكن موجوداً بالفعل
                        if ($('#brands option[value=""]').length === 0) {
                            $('#brands').append('<option value="">{{ trans('general.select_brand') }}</option>');
                        }
                        if (data.status == 200) {
                            alert(1);
                            data.data.companies.forEach(element => {
                                let equal = (element.id == old) ? 'selected' : '';

                                if ($('#brands option[value="' + element.id + '"]').length === 0) {
                                    $('#brands').append(`<option value ="${element.id}" ${equal}>${element.title}</option>`);
                                }
                            });
                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }

            $('#store').on('change', function() {
                $('#brands').empty();
                var store_id = $('#store').val();

                let url = "{{ route('store.brands', [':id']) }}";
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data.data);

                        // أضف الخيار فقط إذا لم يكن موجوداً بالفعل
                        if ($('#brands option[value=""]').length === 0) {
                            $('#brands').append('<option value="">{{ trans('general.select_brand') }}</option>');
                        }

                        data.data.forEach(element => {
                            let equal = (element.id == old) ? 'selected' : '';

                            if ($('#brands option[value="' + element.id + '"]').length === 0) {
                                $('#brands').append(`<option value ="${element.id}" ${equal}>${element.title}</option>`);
                            }
                        });
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            });
        });
    </script>

{{-- store==>categories --}}
    <script>
        $(document).ready(function() {
            let old = $('#categories').attr('old');
            if (old != null) {
                $('#categories').empty();  // تنظيف القائمة قبل إضافة الخيارات
                var store_id = $('#store').val();
                console.log('store_id', store_id);

                let url = "{{ route('store.categories', [':id']) }}";
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);
                        // أضف خيار "اختر الفئة" فقط إذا لم يكن موجوداً بالفعل
                        if ($('#categories option[value=""]').length === 0) {
                            $('#categories').append('<option value="">{{ trans('general.select_category') }}</option>');
                        }

                        if (data.status == 200) {
                            alert(1);
                            data.data.companies.forEach(element => {
                                let equal = (element.id == old) ? 'selected' : '';
                                
                                // التحقق من أن الخيار لم يتم إضافته مسبقاً
                                if ($('#categories option[value="' + element.id + '"]').length === 0) {
                                    var option = `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                    $('#categories').append(option);
                                }
                            });
                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }

            $('#store').on('change', function() {
                $('#categories').empty();  // تنظيف القائمة قبل إضافة الخيارات
                var store_id = $('#store').val();

                let url = "{{ route('store.categories', [':id']) }}";
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data.data);
                        // أضف خيار "اختر الفئة" فقط إذا لم يكن موجوداً بالفعل
                        if ($('#categories option[value=""]').length === 0) {
                            $('#categories').append('<option value="">{{ trans('general.select_category') }}</option>');
                        }

                        data.data.forEach(element => {
                            let equal = (element.id == old) ? 'selected' : '';

                            // التحقق من أن الخيار لم يتم إضافته مسبقاً
                            if ($('#categories option[value="' + element.id + '"]').length === 0) {
                                var option = `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#categories').append(option);
                            }
                        });
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            });
        });
    </script>


{{-- categories==>subcategories --}}
    <script>
        $(document).ready(function() {
            let old = $('#subcategories').attr('old');
            if (old != null) {
                $('#subcategories').empty();  // تنظيف القائمة قبل إضافة الخيارات
                var categories_id = $('#categories').val();
                console.log('categories_id', categories_id);

                let url = "{{ route('category.subcategories', [':id']) }}";
                url = url.replace(':id', categories_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);
                        // أضف خيار "اختر الفئة الفرعية" فقط إذا لم يكن موجوداً بالفعل
                        if ($('#subcategories option[value=""]').length === 0) {
                            $('#subcategories').append('<option value="">{{ trans('general.select_subcategory') }}</option>');
                        }

                        if (data.status == 200) {
                            alert(1);
                            data.data.companies.forEach(element => {
                                let equal = (element.id == old) ? 'selected' : '';

                                // التحقق من أن الخيار لم يتم إضافته مسبقاً
                                if ($('#subcategories option[value="' + element.id + '"]').length === 0) {
                                    var option = `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                    $('#subcategories').append(option);
                                }
                            });
                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }

            $('#categories').on('change', function() {
                $('#subcategories').empty();  // تنظيف القائمة قبل إضافة الخيارات
                var categories_id = $('#categories').val();

                let url = "{{ route('category.subcategories', [':id']) }}";
                url = url.replace(':id', categories_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data.data);
                        // أضف خيار "اختر الفئة الفرعية" فقط إذا لم يكن موجوداً بالفعل
                        if ($('#subcategories option[value=""]').length === 0) {
                            $('#subcategories').append('<option value="">{{ trans('general.select_subcategory') }}</option>');
                        }

                        data.data.forEach(element => {
                            let equal = (element.id == old) ? 'selected' : '';

                            // التحقق من أن الخيار لم يتم إضافته مسبقاً
                            if ($('#subcategories option[value="' + element.id + '"]').length === 0) {
                                var option = `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#subcategories').append(option);
                            }
                        });
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            });
        });
    </script>

{{-- variations --}}
    <script>
        $(document).ready(function () {
            let variationIndex = 0;
            let selectedSizes = [];
            let selectedColors = [];
            let availableSizes = [];
            let availableColors = [];

            // Fetch sizes and colors based on the selected store
            $('#store').on('change', function () {
                const storeId = $(this).val();
                if (storeId) {
                    // Reset variations table and selected arrays
                    $('#variationsTable tbody').empty();
                    selectedSizes = [];
                    selectedColors = [];

                    // Fetch sizes and colors for the store (AJAX request)
                    let url = "{{ route('store.variations', [':id']) }}"
                    url = url.replace(':id', storeId);
                    $.ajax({
                        url:url, // API endpoint for fetching store data
                        type: 'GET',
                        success: function (response) {
                            availableSizes = response.sizes; // Sizes array
                            availableColors = response.colors; // Colors array

                            $('#addVariationRow').prop('disabled', false); // Enable the add button
                        },
                        error: function () {
                            alert('Failed to load store data.');
                        }
                    });
                } else {
                    // Reset if no store is selected
                    $('#addVariationRow').prop('disabled', true);
                    availableSizes = [];
                    availableColors = [];
                }
            });

            $('#addVariationRow').off('click').on('click', function () {
                let sizeOptions = '<option value="">{{ trans("general.select_size") }}</option>'; // Default "select_size" option
                sizeOptions += availableSizes
                    .filter(size => !selectedSizes.includes(size.id)) // Exclude already selected sizes
                    .map(size => `<option value="${size.id}">${size.title}</option>`)
                    .join('');

                let colorOptions = '<option value="">{{ trans("general.select_color") }}</option>'; // Default "select_color" option
                colorOptions += availableColors
                    .filter(color => !selectedColors.includes(color.id)) // Exclude already selected colors
                    .map(color => `<option value="${color.id}">${color.title}</option>`)
                    .join('');

                if (sizeOptions && colorOptions) {
                    const newRow = `
                        <tr>
                            <td>
                                <select name="variations[${variationIndex}][size_id]" class="form-control size-select">
                                    ${sizeOptions}
                                </select>
                            </td>
                            <td>
                                <select name="variations[${variationIndex}][color_id]" class="form-control color-select">
                                    ${colorOptions}
                                </select>
                            </td>
                            <td>
                                <input type="number" name="variations[${variationIndex}][price]" class="form-control" placeholder="{{ __('general.price') }}">
                            </td>
                            <td>
                                <input type="number" name="variations[${variationIndex}][quantity]" class="form-control" placeholder="{{ __('general.quantity') }}">
                            </td>
                            <td>
                                <input type="file" name="variations[${variationIndex}][image]" class="form-control variation-image">
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger remove-variation-row"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `;
                    $('#variationsTable tbody').append(newRow);
                    variationIndex++;
                    updateOptions();
                } else {
                    alert('No more options available.');
                }
            });


            // Remove variation row
            $(document).on('click', '.remove-variation-row', function () {
                const row = $(this).closest('tr');
                const size = row.find('.size-select').val();
                const color = row.find('.color-select').val();

                selectedSizes = selectedSizes.filter(item => item !== size);
                selectedColors = selectedColors.filter(item => item !== color);

                row.remove();
                updateOptions();
            });

            // Track selected sizes and colors
            $(document).on('change', '.size-select', function () {
                const size = $(this).val();
                selectedSizes = Array.from(new Set([...selectedSizes, size]));
                updateOptions();
            });

            $(document).on('change', '.color-select', function () {
                const color = $(this).val();
                selectedColors = Array.from(new Set([...selectedColors, color]));
                updateOptions();
            });

            // Update options to exclude selected items based on size and color combination
            function updateOptions() {
                $('select[name*="[size_id]"]').each(function () {
                    const currentRow = $(this).closest('tr');
                    const currentColor = currentRow.find('.color-select').val(); // Current color in the same row
                    const currentSize = $(this).val(); // Current selected size for this row

                    $(this).find('option').each(function () {
                        const optionValue = $(this).val();

                        // Check if this size + color combination is already used
                        const isCombinationUsed = $('#variationsTable tbody tr').toArray().some(tr => {
                            const size = $(tr).find('.size-select').val();
                            const color = $(tr).find('.color-select').val();
                            return size === optionValue && color === currentColor && size !== currentSize;
                        });

                        if (isCombinationUsed) {
                            $(this).hide(); // Hide if the combination of size + color is used
                        } else {
                            $(this).show(); // Otherwise, show the option
                        }
                    });
                });

                $('select[name*="[color_id]"]').each(function () {
                    const currentRow = $(this).closest('tr');
                    const currentSize = currentRow.find('.size-select').val(); // Current size in the same row
                    const currentColor = $(this).val(); // Current selected color for this row

                    $(this).find('option').each(function () {
                        const optionValue = $(this).val();

                        // Check if this color + size combination is already used
                        const isCombinationUsed = $('#variationsTable tbody tr').toArray().some(tr => {
                            const size = $(tr).find('.size-select').val();
                            const color = $(tr).find('.color-select').val();
                            return size === currentSize && color === optionValue && color !== currentColor;
                        });

                        if (isCombinationUsed) {
                            $(this).hide(); // Hide if the combination of color + size is used
                        } else {
                            $(this).show(); // Otherwise, show the option
                        }
                    });
                });
            }
        });
    </script>

    <!-- JavaScript to Toggle Section -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let offerCheckbox = document.getElementById("flexCheckDefault");
            let offerSection = document.getElementById("offer-section");

            offerCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    offerSection.style.display = "block";
                } else {
                    offerSection.style.display = "none";
                }
            });
        });
    </script>

    <script>
        document.getElementById('color').addEventListener('input', function() {
            document.getElementById('colorValue').textContent = this.value;
        });
    </script>
@endpush

