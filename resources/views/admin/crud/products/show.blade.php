@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'products', 
        'action' => 'show',     
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

                                        <div class="col-md-6">
                                            <div class="mb-5 p-3 rounded h-100">
                                                <div class="card-title fw-bold">
                                                    <h5 class="col-form-label pt-0">{{ __('general.title') }}:</h5>
                                                    <p style="margin: 0; store: inherit; font-weight: normal;">
                                                        {{ $product->translate($locale)->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                            <div class="mb-5 p-3 rounded h-100">
                                                <div class="card-title fw-bold">
                                                    <h5 class="col-form-label pt-0">{{ __('general.description') }}:</h5>
                                                    <p style="margin: 0; store: inherit; font-weight: normal;">
                                                        {!! $product->translate($locale)->description !!}</p>
                                                </div>
                                            </div>
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
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.store')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->store->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.brand')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->brand->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.category')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->category->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.subcategory')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ optional($product->subcategory)->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.weight')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->weight }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.SKU')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $product->SKU }}</p>
                                    </div>
                                </div>

                                <div class="card card-custom mt-5 mb-5">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ __('general.productVariations') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        @if($product->productVariations && $product->productVariations->count() > 0)
                                            <div class="table-responsive table-desi">
                                                <table class="table list-digital all-package table-category">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('general.id') }}</th>
                                                            <th>{{ __('general.image') }}</th>
                                                            <th>{{ __('general.color') }}</th>
                                                            <th>{{ __('general.size') }}</th>
                                                            <th>{{ __('general.price') }}</th>
                                                            <th>{{ __('general.quantity') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($product->productVariations as $variation)
                                                            <tr>
                                                                <td>{{ $variation->id }}</td>
                                                                <td>
                                                                    <img src="{{ asset($variation->file->url ?? 'default-image.jpg') }}" alt="Variation Image" width="150" height="50">
                                                                </td>
                                                                <td>{{ $variation->color->title }}</td>
                                                                <td>{{ $variation->size->title }}</td>
                                                                <td>{{ $variation->price }}</td>
                                                                <td>{{ $variation->quantity }}</td>
                                                            
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <p>{{ __('general.no_variations_found') }}</p>
                                        @endif
                                    </div>
                                </div>
                                

                                
                                <div class="card card-custom mt-5 mb-5">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ __('general.productOffer') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        @if($product->productOffer && $product->productOffer->count() > 0)
                                            <div class="table-responsive table-desi">
                                                <table class="table list-digital all-package table-category">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('general.id') }}</th>
                                                            <th>{{ __('general.startDate') }}</th>
                                                            <th>{{ __('general.endDate') }}</th>
                                                            <th>{{ __('general.percentage') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $product->productOffer->id }}</td>
                                                            <td>{{ $product->productOffer->startDate}}</td>
                                                            <td>{{ $product->productOffer->endDate }}</td>
                                                            <td>{{ $product->productOffer->percentage }}</td>                                                        
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <p>{{ __('general.no_offers_found') }}</p>
                                        @endif
                                    </div>
                                </div>
                            

                                <div class="form-group">
                                    <img src="{{ $product->image }}" class="w-50">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile1">{{ __('general.images')}}</label>
                                    <div class="row">
                                        @foreach ($images as $image)
                                            @if (isset($image->id))
                                                <div class="col-md-3">
                                                    <img width="100" height="100" class="mx-3" src="{{ $image->url }}"
                                                        alt="">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
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

@endpush
