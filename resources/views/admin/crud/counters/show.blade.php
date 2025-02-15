@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.show') }} {{ __('general.counters') }}</h5>
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
                                                <!-- Normal title input -->
                                                <div class="col-sm-12"> 
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-sm-3 mb-0">{{ __('general.title') }} -
                                                            @lang('general.' . $locale)</label>
                                                        <p class="col-sm-9">{{  $counter->translate($locale)->title}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-sm-12"> 
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="form-label-title col-sm-3 mb-0">{{ __('general.count') }}</label>
                                            <p class="col-sm-9">{{ $counter->count }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->
    </div>
@endsection
