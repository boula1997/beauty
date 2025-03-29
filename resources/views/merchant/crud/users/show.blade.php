@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains user content -->
    <div class="content-wrapper">
        <!-- Content Header (user header) -->
        <!-- Content Header (blog header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card card-custom mb-2">
                        <div class="card-header card-header-tabs-line">
                            @include('admin.components.breadcrumb', [
                                'module' => 'users',
                                'action' => 'show',
                            ])
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-custom">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{__('general.name')}}</label>
                                                <p>{{ $user->name }}</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">{{__('general.email')}}</label>
                                                    <p>{{ $user->email }}</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">{{__('general.phone')}}</label>
                                                    <p>{{ $user->phone }}</p>
                                                </div>

                                                


                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile1">{{__('general.image')}}</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group text-center">
                                                                <img width="300" height="300" src="{{ $user->image }}"
                                                                    alt="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">{{ __('general.your_location')}}</label>
                                                                <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude',$user->latitude) }}" >
                                                                <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude',$user->longitude) }}" >
                                                                <div id="map" style="width:1000px; height:400px"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->


                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
@push('scripts')
    <script>
        var geocoder = new google.maps.Geocoder();
        var marker = null;
        var map = null;
        function initialize() {
            var $latitude = document.getElementById('latitude');
            var $longitude = document.getElementById('longitude');
            var latitude = '{{ $user->latitude }}'
            var longitude = '{{ $user->longitude }}';
            var zoom = 10;

        var LatLng = new google.maps.LatLng(latitude, longitude);

        var mapOptions = {
            zoom: zoom,
            center: LatLng,
            panControl: false,
            zoomControl: false,
            scaleControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        if (marker && marker.getMap) marker.setMap(map);
        marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: 'اسحبنى!',
            draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function(marker) {
            var latLng = marker.latLng;
            $latitude.value = latLng.lat();
            $longitude.value = latLng.lng();
        });


        }
        initialize();
        $('#findbutton').click(function (e) {
            var address = $("#Postcode").val();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $(latitude).val(marker.getPosition().lat());
                    $(longitude).val(marker.getPosition().lng());
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            e.preventDefault();
        });
    </script>
@endpush