@extends('admin.components.form')
@section('fields_content')
    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'banners',
        'action' => 'show',
    ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('general.banner')}}</h5>
                    </div>

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.store')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $banner->store->title }}</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <img src="{{ $banner->image }}" class="w-50">
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
