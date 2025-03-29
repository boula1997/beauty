@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'contacts', 'action' => 'show'])
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{__('general.contact')}}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $contact->contact }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{__('general.type')}}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $contact->type }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{__('general.icon')}}:</h5>
                                    <i class="{{ $contact->icon }}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
