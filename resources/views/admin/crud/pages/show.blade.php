@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        <!-- New page Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.show') }} {{ __('general.pages') }}</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link @if ($key == 0) active @endif"
                                                    id="pills-{{ $locale }}-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-{{ $locale }}"
                                                    type="button">@lang('general.' . $locale)</button>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                                id="pills-{{ $locale }}" role="tabpanel">
                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.title') }}</label>
                                                        <p class="bg-show p-2 mt-2">{{ $page->translate($locale)->title }}</p>
                                                    </div>
                                                </div>

                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.subtitle') }}</label>
                                                        <p class="bg-show p-2 mt-2">{{ $page->translate($locale)->subtitle }}</p>
                                                    </div>
                                                </div>

                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.description') }}</label>
                                                        <p class="bg-show p-2 mt-2">{!! $page->translate($locale)->description !!}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.image') }}</label> <img
                                                class="bg-show p-2 mt-2" width="300" height="300"
                                                src="{{ $page->image }}" alt=""> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New page Add End -->
    </div>
@endsection
