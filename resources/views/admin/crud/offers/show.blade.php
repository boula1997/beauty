@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'offers', 'action' => 'show'])
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
                <div class="card-body p-10">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">{{__('general.title')}}:</h5>
                                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $offer->translate($locale)->title }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">{{__('general.link')}}:</h5>
                                                <p style="margin: 0; color: inherit; font-weight: normal;">{{ $offer->translate($locale)->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">{{__('general.description')}}:</h5>
                                                <p style="margin: 0; color: inherit; font-weight: normal;">{!! $offer->translate($locale)->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{ $offer->image }}" class="w-50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
