@extends('admin.components.form')
@section('form_action', route('users.update', $user->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @include('admin.components.alert-error')

        @method('PUT')
        <!-- Main content -->
        <section class="content py-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-custom">
                            <div class="card card-header">
                                @include('admin.components.breadcrumb', ['module' => 'users', 'action' => 'edit'])
    
                            </div>

                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body mb-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('general.name')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputName" placeholder="{{__('general.name')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('general.email')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputEmail" placeholder="{{__('general.email')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('general.phone')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputphone" placeholder="{{__('general.phone')}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('general.password')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <input type="password" name="password" value="" class="form-control @error('') invalid @enderror"
                                        id="exampleInputPassword" placeholder="Enter {{__('general.password')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('general.confirm_password')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                     <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                        class="form-control @error('') invalid @enderror" id="exampleInputConfirmpassword"
                                        placeholder="Enter {{__('general.confirm_password')}}">
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

                                <div class="row">
                                    <div class="form-group">
                                        @include('admin.components.image', [
                                            'label' => __('general.image'),
                                            'value' => old('image',$user->image),
                                            'name' => 'image',
                                            'id' => 'kt_image_3',
                                            'accept' => 'image/*',
                                            'required' => true,
                                        ])
                
                                    </div>
                                </div>

                                <div class="card-footer mb-5 mt-5">
                                    <button type="submit" class="btn btn-outline-primary px-5">{{__('general.save')}}</button>
                                    <a href="{{ route('users.index') }}"
                                        class="btn btn-outline-danger px-5
                                    ">{{__('general.cancel')}}</a>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

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
