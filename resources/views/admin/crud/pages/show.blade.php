@extends('admin.components.form')
@section('fields_content')
    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'pages',
        'action' => 'show',
    ])

   <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
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
                                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $page->translate($locale)->title }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-5 bg-light p-3 rounded h-100">
                                                    <div class="card-title fw-bold">
                                                        <h5 class="font-weight-bolder text-dark">{{__('general.subtitle')}}:</h5>
                                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $page->translate($locale)->subtitle }}</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-5 bg-light p-3 rounded h-100">
                                                    <div class="card-title fw-bold">
                                                        <h5 class="font-weight-bolder text-dark">{{__('general.description')}}:</h5>
                                                        <p style="margin: 0; color: inherit; font-weight: normal;">{!! $page->translate($locale)->description !!}</p>
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
   </div>
@endsection
