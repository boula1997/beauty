@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'itemRequests', 
        'action' => 'show',     
        ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row itemRequest-adding">
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
                                                        {{ $itemRequest->product->translate($locale)->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                            <div class="mb-5 p-3 rounded h-100">
                                                <div class="card-title fw-bold">
                                                    <h5 class="col-form-label pt-0">{{ __('general.description') }}:</h5>
                                                    <p style="margin: 0; store: inherit; font-weight: normal;">
                                                        {!! $itemRequest->translate($locale)->description !!}</p>
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
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $itemRequest->store->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.brand')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $itemRequest->brand->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.category')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $itemRequest->category->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.subcategory')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ optional($itemRequest->subcategory)->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.weight')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $itemRequest->weight }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.SKU')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $itemRequest->SKU }}</p>
                                    </div>
                                </div>

                                <div class="card card-custom mt-5 mb-5">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ __('general.itemRequestVariations') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        @if($itemRequest->itemRequestVariations && $itemRequest->itemRequestVariations->count() > 0)
                                            <div class="table-responsive table-desi">
                                                <table class="table list-digital all-package table-category">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('general.id') }}</th>
                                                            <th>{{ __('general.color') }}</th>
                                                            <th>{{ __('general.size') }}</th>
                                                            <th>{{ __('general.price') }}</th>
                                                            <th>{{ __('general.quantity') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($itemRequest->itemRequestVariations as $variation)
                                                            <tr>
                                                                <td>{{ $variation->id }}</td>
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
                                        <h3 class="card-title">{{ __('general.itemRequestOffer') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        @if($itemRequest->itemRequestOffer && $itemRequest->itemRequestOffer->count() > 0)
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
                                                            <td>{{ $itemRequest->itemRequestOffer->id }}</td>
                                                            <td>{{ $itemRequest->itemRequestOffer->startDate}}</td>
                                                            <td>{{ $itemRequest->itemRequestOffer->endDate }}</td>
                                                            <td>{{ $itemRequest->itemRequestOffer->percentage }}</td>                                                        
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
                                    <img src="{{ $itemRequest->image }}" class="w-50">
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
