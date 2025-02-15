@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        <!-- New admin Add Start -->
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
                                                class="form-label-title mb-0">{{ __('general.name') }}</label>
                                            <p class="bg-show p-2 mt-2">{{ $admin->name }}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-5 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">{{ __('general.email') }}: </h5> <a
                                                    href="mailto:{{ $admin->email }}"
                                                    style="margin: 0; color: inherit; font-weight: normal;">{{ $admin->email }}</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.type') }}</label>
                                            <p class="bg-show p-2 mt-2">{{ $admin->type }}</p>
                                        </div>
                                    </div>


                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.dark') }}</label>
                                            <p class="bg-show p-2 mt-2">
                                                {{ $admin->dark ? _('general.yes') : __('general.no') }}</p>
                                        </div>
                                    </div>

                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.created_at') }}</label>
                                            <p class="bg-show p-2 mt-2">{{ $admin->created_at }}</p>
                                        </div>
                                    </div>

                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.updated_at') }}</label>
                                            <p class="bg-show p-2 mt-2">{{ $admin->updated_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New admin Add End -->
    </div>
@endsection
