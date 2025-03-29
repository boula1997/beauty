@extends('admin.components.form')
@section('fields_content')
    <!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'sliders',
        'action' => 'show',
    ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('general.slider') }}</h5>
                    </div>

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="row">

                                <div class="form-group">
                                    <img src="{{ $slider->image }}" class="w-50">
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
