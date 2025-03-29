@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'merchantRequests', 
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
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.storeName')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ isset($merchantRequest->storeName)?$merchantRequest->storeName :'NA' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.merchantName')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ isset($merchantRequest->merchantName)?$merchantRequest->merchantName :'NA' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.email')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $merchantRequest->email  }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.phone')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $merchantRequest->phone  }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.address')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ isset($merchantRequest->address)?$merchantRequest->address:'NA'  }}</p>
                                    </div>
                                </div> 
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.username')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $merchantRequest->username  }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.status')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $merchantRequest->status  }}</p>
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

