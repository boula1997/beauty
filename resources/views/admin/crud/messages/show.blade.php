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
                                        <h5>{{ __('general.show') }} {{ __('general.products') }}</h5>
                                    </div>
                                    <!-- normal input -->
                                    <div class="row">
                                        <div class="col-sm-6"> 
                                            <div class="mb-4 align-items-center">
                                                <label class="form-label-title mb-0">{{__('general.name')}}</label>
                                                <p class="bg-show p-2 mt-2">{{$message->name}}</p>
                                            </div> 
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-5 bg-light p-2 rounded">
                                                <div class="card-title fw-bold">
                                                    <h5 class="font-weight-bolder text-dark">{{ __('general.email') }}: </h5> <a href="mailto:{{ $message->email }}" 
                                                        class=" p-2 mt-5 text-dark">{{ $message->email }}</a> 
                                                </div> 
                                            </div> 
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-5 bg-light p-2 rounded ">
                                                <div class="card-title fw-bold">
                                                    <h5 class="font-weight-bolder text-dark">{{ __('general.phone') }}: </h5> <a href="mailto:{{ $message->email }}" 
                                                        class=" p-2 mt-5 text-dark">{{ $message->phone }}</a> 
                                                </div> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-5 bg-light p-2 rounded">
                                                <div class="card-title fw-bold">
                                                    <h5 class="font-weight-bolder text-dark">{{ __('general.type') }}: </h5> <a href="mailto:{{ $message->email }}" 
                                                        class=" p-2 mt-5 text-dark">{{ $message->type }}</a> 
                                                </div> 
                                            </div> 
                                        </div>

                                        <!-- normal input --> 
                                        <div class="col-md-12"> 
                                            <div class="mb-4 align-items-center">
                                                <label class="form-label-title mb-0">{{__('general.message')}}</label> <p class="bg-show p-2 mt-2">{{$message->message}}</p> 
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
        <!-- New Product Add End -->
    </div>
@endsection
