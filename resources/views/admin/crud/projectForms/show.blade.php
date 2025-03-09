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
                                        <h5>{{ __('general.show') }} {{ __('general.projectForms') }}</h5>
                                    </div>
                                    <!-- normal input -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4 align-items-center">
                                                <label class="form-label-title mb-0">{{ __('general.name') }}</label>
                                                <p class="bg-show p-2 mt-2">{{ $projectForm->name }}</p>
                                            </div>
                                        </div>

                                       

                                        <div class="col-md-6">
                                            <div class="mb-5 bg-light p-2 rounded ">
                                                <div class="card-title fw-bold">
                                                    <h5 class="font-weight-bolder text-dark">{{ __('general.phone') }}:
                                                    </h5> <a href="mailto:{{ $projectForm->email }}"
                                                        class=" p-2 mt-5 text-dark">{{ $projectForm->phone }}</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="mb-4 align-items-center">
                                                <label class="form-label-title mb-0">{{ __('general.project') }}</label>
                                                <p class="bg-show p-2 mt-2">{{ $projectForm->project->title }}</p>
                                            </div>
                                        </div>

                                    

                                        <!-- normal input -->
                                        <div class="col-md-12">
                                            <div class="mb-4 align-items-center">
                                                <label
                                                    class="form-label-title mb-0">{{ __('general.message') }}</label>
                                                <p class="bg-show p-2 mt-2">{{ $projectForm->message }}</p>
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
