@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'stores', 
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
                                                        {{ $store->translate($locale)->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                            <div class="mb-5 p-3 rounded h-100">
                                                <div class="card-title fw-bold">
                                                    <h5 class="col-form-label pt-0">{{ __('general.description') }}:</h5>
                                                    <p style="margin: 0; store: inherit; font-weight: normal;">
                                                        {!! $store->translate($locale)->description !!}</p>
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
                                        <h5 class="font-weight-bolder text-dark">{{__('general.email')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $store->email }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.phone')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $store->phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.banner')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $store->banner }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.deliveryCharge')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $store->deliveryCharge }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.categories')}}:</h5>
                                        @foreach ($store->categories as $category)
                                            <p style="margin: 0; color: inherit; font-weight: normal;">{{ $category->title }}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.brands')}}:</h5>
                                        @foreach ($store->brands as $brand)
                                            <p style="margin: 0; color: inherit; font-weight: normal;">{{ $brand->title }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            

                                <div class="form-group">
                                    <img src="{{ $store->image }}" class="w-50">
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

