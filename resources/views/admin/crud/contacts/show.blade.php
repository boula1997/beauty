@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'contacts', 
        'action' => 'show',     
        ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>
                

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-5 p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="col-form-label pt-0">{{ __('general.contact') }}:</h5>
                                            <p style="margin: 0; store: inherit; font-weight: normal;">
                                                {{ $contact->contact }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-5 p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="col-form-label pt-0">{{ __('general.type') }}:</h5>
                                            <p style="margin: 0; store: inherit; font-weight: normal;">
                                                {{ $contact->type }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-5 p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="col-form-label pt-0">{{ __('general.icon') }}:</h5>
                                            <p style="margin: 0; font-weight: normal;">
                                                <i class="{{ $contact->icon }}" style="font-size: 30px;"></i>
                                            </p>
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
    <!-- Container-fluid Ends-->
@endsection

