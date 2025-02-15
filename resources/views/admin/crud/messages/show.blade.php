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
   <!-- normal input --> <div class="mb-4 row align-items-center"> <div class="col-sm-6"> <label class="form-label-title mb-0">{{__('general.name')}}</label> <p class="bg-show p-2 mt-2">{{$message->name}}</p> </div> </div>

<div class="col-md-6"> <div class="mb-5 bg-light p-3 rounded h-100"> <div class="card-title fw-bold"> <h5 class="font-weight-bolder text-dark">{{ __('general.email') }}: </h5> <a href="mailto:{{ $message->email }}" style="margin: 0; color: inherit; font-weight: normal;">{{ $message->email }}</a> </div> </div> </div>

<!-- normal input --> <div class="mb-4 row align-items-center"> <div class="col-sm-6"> <label class="form-label-title mb-0">{{ __('general.phone') }}</label> <p class="bg-show p-2 mt-2"> <a href="tel:{{ $message->phone }}" {{ $message->phone }} </a> </p> </div> </div>

<!-- normal input --> <div class="mb-4 row align-items-center"> <div class="col-sm-6"> <label class="form-label-title mb-0">{{__('general.message')}}</label> <p class="bg-show p-2 mt-2">{{$message->message}}</p> </div> </div>

<!-- normal input --> <div class="mb-4 row align-items-center"> <div class="col-sm-6"> <label class="form-label-title mb-0">{{__('general.created_at')}}</label> <p class="bg-show p-2 mt-2">{{$message->created_at}}</p> </div> </div>

<!-- normal input --> <div class="mb-4 row align-items-center"> <div class="col-sm-6"> <label class="form-label-title mb-0">{{__('general.updated_at')}}</label> <p class="bg-show p-2 mt-2">{{$message->updated_at}}</p> </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->
    </div>
@endsection
