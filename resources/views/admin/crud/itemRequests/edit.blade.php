@extends('admin.components.form')
@section('form_action', route('itemRequests.update', $itemRequest->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('PUT')
    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'itemRequests',
        'action' => 'edit',
    ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row itemRequest-adding">
            <div class="col-xl-12">
                <!-- Language Content -->
                <input type="hidden" name="action" id="action">
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
                            <div class="tab-pane fade @if ($key == 0) show active @endif"
                                id="{{ $locale }}">
                                <div class="form-group">
                                    <label for="title_{{ $locale }}">{{ __('general.title') }} -
                                        @lang('general.' . $locale)</label>
                                    <input type="text" name="{{ $locale . '[title]' }}" id="title_{{ $locale }}"
                                        class="form-control {{ itemBG($data[$locale]['title'], $product->translate($locale)->title) }}"
                                        value="{{ $data[$locale]['title'] }}">
                                </div>

                                <div class="col-form-group ">
                                    <label>{{ __('general.description') }}(@lang('general.' . $locale))<span
                                            class="text-danger"></span></label>
                                    <textarea rows="5"
                                        class="form-control @error($locale . '.description') is-invalid @enderror {{ itemBG($data[$locale]['description'], $product->translate($locale)->description) }}"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description', $data[$locale]['description']) !!} 
                                    </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Store, Brand, Category Info -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('general.store') }}</label>
                            <input name="store_id" type="text"
                                class="form-control {{ itemBG($data['store_id'], $product->store_id) }}"
                                value="{{ $data['store_id'] }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.brand') }}</label>
                            <input type="text" name="brand_id"
                                class="form-control {{ itemBG($data['brand_id'], $product->brand_id) }}"
                                value="{{ $data['brand_id'] }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.category') }}</label>
                            <input type="text" name="category_id"
                                class="form-control {{ itemBG($data['category_id'], $product->category_id) }}"
                                value="{{ $data['category_id'] }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.subcategory') }}</label>
                            <input type="text" name="subcategory_id"
                                class="form-control {{ itemBG($data['subcategory_id'], $product->subcategory_id) }}"
                                value="{{ $data['subcategory_id'] ?? 'N/A' }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.weight') }}</label>
                            <input type="text" name="weight"
                                class="form-control {{ itemBG($data['weight'], $product->weight) }}"
                                value="{{ $data['weight'] }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.SKU') }}</label>
                            <input type="text" name="SKU"
                                class="form-control {{ itemBG($data['SKU'], $product->SKU) }}"
                                value="{{ $data['SKU'] }}">
                        </div>
                    </div>
                </div>

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
                            @foreach ($data['variations'] as $index => $variation)
                            <tr>
                                    <td>
                                        <select name="variations[{{ $index }}][size_id]"
                                            class="form-control size-select">
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}"
                                                    {{ $size->id == $variation['size_id'] ? 'selected' : '' }}>
                                                    {{ $size->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="variations[{{ $index }}][color_id]"
                                            class="form-control color-select">
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}"
                                                    {{ $color->id == $variation['color_id'] ? 'selected' : '' }}>
                                                    {{ $color->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <!-- Replace price value dynamically -->
                                        <input type="number" name="variations[{{ $index }}][price]"
                                            class="form-control"
                                            value="{{ old('variations.' . $index . '.price', $variation['price']) }}">
                                    </td>
                                    <td>
                                        <!-- Replace quantity value dynamically -->
                                        <input type="number" name="variations[{{ $index }}][quantity]"
                                            class="form-control"
                                            value="{{ old('variations.' . $index . '.quantity', $variation['quantity']) }}">
                                    </td>

                                    <td>
                                        <input type="file" name="variations[{{ $index }}][image]" class="form-control variation-image">
                                        @if (isset($variationImages[$index]))
                                            <img src="{{ asset($variationImages[$index]) }}" alt="Current Image" width="50" height="50" class="mt-2">
                                            <input type="hidden" name="variations[{{ $index }}][old_image]" value="{{ $variationImages[$index] }}">
                                        @endif
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-danger remove-variation-row"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Add Variation Button -->
                    <button type="button" id="addVariationRow"
                        class="btn btn-primary mt-3">{{ __('general.add_variation') }}</button>
                </div>



                <!-- Dates and Percentage -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('general.start_date') }}</label>
                            <input type="text" name="startDate" class="form-control"
                                value="{{ $data['startDate'] ?? 'N/A' }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.end_date') }}</label>
                            <input type="text" name="endDate" class="form-control"
                                value="{{ $data['endDate'] ?? 'N/A' }}">
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('general.percentage') }}</label>
                            <input type="text" name="percentage" class="form-control"
                                value="{{ $data['percentage'] ?? 'N/A' }}">
                        </div>
                    </div>

                    {{-- images --}}
                    <div class="col-md-6">
                        @include('admin.components.image', [
                            'label' => __('general.image'),
                            'value' => old('image', asset($image)),
                            'name' => 'image',
                            'id' => 'kt_image_3',
                            'accept' => 'image/*',
                            'required' => true,
                        ])

                    </div>

                    @include('admin.components.images', ['images' => $images])
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group mb-0">
                                <div class="itemRequest-buttons">
                                    <button type="submit" class="btn btn-primary"
                                        onclick="document.getElementById('action').value='accept'">
                                        {{ __('general.accept') }}
                                    </button>
                                    <button type="submit" class="btn btn-light"
                                        onclick="document.getElementById('action').value='reject'">
                                        {{ __('general.reject') }}
                                    </button>
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
            $('.summernote').summe rnote()

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
                $('#brands').find('option').remove().end();
                var store_id = $('#store').val();
                console.log('store_id', store_id);

                let url = "{{ route('store.brands', [':id']) }}"
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);

                        if (data.status == 200) {
                            alert(1);
                            let equal;
                            $('#brands').append(
                                '<option value="">{{ trans('general.select_brand') }}</option>');

                            data.data.companies.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#brands').append(option);
                            });

                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }
            $('#store').on('change', function() {

                $('#brands').find('option').remove().end();
                var store_id = $('#store').val();

                let url = "{{ route('store.brands', [':id']) }}"
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {

                        console.log(data.data);
                        let equal;
                        $('#brands').append(
                            '<option value="">{{ trans('general.select_brand') }}</option>'
                        );

                        data.data.forEach(element => {
                            let equal = '';
                            if (element.id == old)
                                equal = 'selected';
                            var option =
                                `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                            $('#brands').append(option);
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
                $('#categories').find('option').remove().end();
                var store_id = $('#store').val();
                console.log('store_id', store_id);

                let url = "{{ route('store.categories', [':id']) }}"
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);

                        if (data.status == 200) {
                            alert(1);
                            let equal;
                            $('#categories').append(
                                '<option value="">{{ trans('general.select_category') }}</option>');

                            data.data.companies.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#categories').append(option);
                            });

                        }
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }
            $('#store').on('change', function() {

                $('#categories').find('option').remove().end();
                var store_id = $('#store').val();

                let url = "{{ route('store.categories', [':id']) }}"
                url = url.replace(':id', store_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {

                        console.log(data.data);
                        let equal;
                        $('#categories').append(
                            '<option value="">{{ trans('general.select_category') }}</option>'
                        );
                        data.data.forEach(element => {
                            let equal = '';
                            if (element.id == old)
                                equal = 'selected';
                            var option =
                                `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                            $('#categories').append(option);
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
                            $('#subcategories').append(
                                '<option value="">{{ trans('general.select_subcategory') }}</option>'
                            );

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
                        $('#subcategories').append(
                            '<option value="">{{ trans('general.select_subcategory') }}</option>'
                        );

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

    <script>
        $(document).ready(function() {
            let variationIndex = 0;
            let selectedSizes = [];
            let selectedColors = [];
            let availableSizes = [];
            let availableColors = [];

            // ?????????? ?????????????? ???????????????? ???????????????? ????????????
            $('#variationsTable tbody tr').each(function() {
                const size = $(this).find('.size-select').val();
                const color = $(this).find('.color-select').val();

                if (size) {
                    selectedSizes.push(size);
                    $(this).data('selected-size', size); // ?????? ?????????? ????????????
                }

                if (color) {
                    selectedColors.push(color);
                    $(this).data('selected-color', color); // ?????? ?????????? ????????????
                }
            });

            // ?????????? ???????????????? ?????? ?????????? ????????????
            updateOptions();

            // Fetch sizes and colors based on the selected store
            $('#store').on('change', function() {
                const storeId = $(this).val();
                if (storeId) {
                    $('#variationsTable tbody').empty(); // Reset variations table
                    selectedSizes = [];
                    selectedColors = [];

                    let url = "{{ route('store.variations', [':id']) }}";
                    url = url.replace(':id', storeId);

                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(response) {
                            availableSizes = response.sizes;
                            availableColors = response.colors;

                            // Update the size and color dropdowns for the first row
                            let sizeOptions =
                                '<option value="">{{ trans('general.select_size') }}</option>';
                            sizeOptions += availableSizes.map(size =>
                                `<option value="${size.id}">${size.title}</option>`).join(
                                '');

                            let colorOptions =
                                '<option value="">{{ trans('general.select_color') }}</option>';
                            colorOptions += availableColors.map(color =>
                                `<option value="${color.id}">${color.title}</option>`).join(
                                '');

                            // Update the first row (or all rows if required)
                            $('#variationsTable tbody tr').each(function() {
                                $(this).find('.size-select').html(
                                    sizeOptions); // Update size dropdown
                                $(this).find('.color-select').html(
                                    colorOptions); // Update color dropdown
                            });

                            // Enable the add button
                            $('#addVariationRow').prop('disabled', false);
                        },
                        error: function() {
                            alert('?????? ???? ?????????? ???????????? ????????????.');
                        }
                    });
                } else {
                    $('#addVariationRow').prop('disabled', true);
                    availableSizes = [];
                    availableColors = [];
                }
            });


            // Add new variation row
            $('#addVariationRow').off('click').on('click', function() {
                let sizeOptions =
                    '<option value="">{{ trans('general.select_size') }}</option>'; // Default "select_size" option
                sizeOptions += availableSizes
                    .filter(size => !selectedSizes.includes(size.id)) // Exclude already selected sizes
                    .map(size => `<option value="${size.id}">${size.title}</option>`)
                    .join('');

                let colorOptions =
                    '<option value="">{{ trans('general.select_color') }}</option>'; // Default "select_color" option
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
            $(document).on('click', '.remove-variation-row', function() {
                const row = $(this).closest('tr');
                const size = row.find('.size-select').val();
                const color = row.find('.color-select').val();

                // Remove the selected size and color from the arrays
                if (size) {
                    selectedSizes = selectedSizes.filter(item => item != size);
                }
                if (color) {
                    selectedColors = selectedColors.filter(item => item != color);
                }

                row.remove();
                updateOptions(); // Update the available options after removal
            });

            // Track selected sizes and colors
            $(document).on('change', '.size-select', function() {
                const size = $(this).val();
                const currentRow = $(this).closest('tr');
                const color = currentRow.find('.color-select').val();

                if (size && selectedSizes.includes(size) && selectedColors.includes(color)) {
                    alert('???? ???????????? ?????? ?????????? ????????????!');
                    $(this).val(''); // Reset the select box
                } else {
                    const previousSize = currentRow.data('selected-size');
                    if (previousSize) {
                        selectedSizes = selectedSizes.filter(item => item !=
                            previousSize); // Remove previous selection
                    }
                    selectedSizes.push(size);
                    currentRow.data('selected-size', size); // Save the new selection
                }
                updateOptions();
            });

            $(document).on('change', '.color-select', function() {
                const color = $(this).val();
                const currentRow = $(this).closest('tr');
                const size = currentRow.find('.size-select').val();

                if (color && selectedSizes.includes(size) && selectedColors.includes(color)) {
                    alert('???? ???????????? ?????? ?????????? ????????????!');
                    $(this).val(''); // Reset the select box
                } else {
                    const previousColor = currentRow.data('selected-color');
                    if (previousColor) {
                        selectedColors = selectedColors.filter(item => item !=
                            previousColor); // Remove previous selection
                    }
                    selectedColors.push(color);
                    currentRow.data('selected-color', color); // Save the new selection
                }
                updateOptions();
            });

            // Update options to exclude selected items based on size and color combination
            function updateOptions() {
                $('select[name*="[size_id]"]').each(function() {
                    const currentRow = $(this).closest('tr');
                    const currentColor = currentRow.find('.color-select')
                        .val(); // Current color in the same row
                    const currentSize = $(this).val(); // Current selected size for this row

                    $(this).find('option').each(function() {
                        const optionValue = $(this).val();

                        // Check if this size + color combination is already used
                        const isCombinationUsed = $('#variationsTable tbody tr').toArray().some(
                            tr => {
                                const size = $(tr).find('.size-select').val();
                                const color = $(tr).find('.color-select').val();
                                return size === optionValue && color === currentColor &&
                                    size !== currentSize;
                            });

                        if (isCombinationUsed) {
                            $(this).hide(); // Hide if the combination of size + color is used
                        } else {
                            $(this).show(); // Otherwise, show the option
                        }
                    });
                });

                $('select[name*="[color_id]"]').each(function() {
                    const currentRow = $(this).closest('tr');
                    const currentSize = currentRow.find('.size-select')
                        .val(); // Current size in the same row
                    const currentColor = $(this).val(); // Current selected color for this row

                    $(this).find('option').each(function() {
                        const optionValue = $(this).val();

                        // Check if this color + size combination is already used
                        const isCombinationUsed = $('#variationsTable tbody tr').toArray().some(
                            tr => {
                                const size = $(tr).find('.size-select').val();
                                const color = $(tr).find('.color-select').val();
                                return size === currentSize && color === optionValue &&
                                    color !== currentColor;
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
@endpush
