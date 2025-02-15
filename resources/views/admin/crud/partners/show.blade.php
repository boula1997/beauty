@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        <!-- New partner Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">

                                 
                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.image') }}</label> <img
                                                class="bg-show p-2 mt-2" width="300" height="300"
                                                src="{{ $partner->image }}" alt=""> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New partner Add End -->
    </div>
@endsection
