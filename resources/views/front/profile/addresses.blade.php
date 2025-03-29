    <div class="tab-pane fade show active" id="address-tab-pane" role="tabpanel">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 mt-0">
                    <div class="card-body">
                        <div class="top-sec">
                            <h3>{{ __('general.AddressBook') }}</h3>
                            <a href="#add-address" data-bs-toggle="modal"
                                class="btn btn-sm btn-solid">+ {{ __('general.AddNew') }}</a>
                        </div>

                        <div class="address-book-section">
                            <div class="row g-4">
                                @foreach ($addresses as $address)
                                    <div class="select-box active col-xl-4 col-md-6">
                                        <div class="address-box">
                                            <div class="top">
                                                <h6>{{ auth()->user()->fullname }}
                                                    <span>{{ $address->title }}</span>
                                                </h6>
                                            </div>
                                            <div class="middle">
                                                <div class="address">
                                                    {{ $address->fullAddress }}
                                                </div>
                                                <div class="number">
                                                    <p>Phone: <span>{{ $address->phone }}</span></p>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <a href="#edit-address"
                                                    data-bs-toggle="modal"
                                                    class="bottom_btn"
                                                    data-id="{{ $address->id }}"
                                                    data-title="{{ $address->title }}"
                                                    data-fullname="{{ $address->fullName }}"
                                                    data-phone="{{ $address->phone }}"
                                                    data-fullAddress="{{ $address->fullAddress }}"
                                                    data-country="{{ $address->country }}"
                                                    data-city="{{ $address->city }}"
                                                    data-latitude="{{ $address->latitude }}"
                                                    data-longitude="{{ $address->longitude }}"
                                                    >{{ __('general.Edit') }}</a>

                                                    <a href="{{ route('current-address', $address->id) }}" 
                                                        class="bottom_btn {{ $address->current ? 'text-primary' : 'text-secondary' }}">
                                                        {{ $address->current ? __('general.current') : __('general.set_as_default') }}
                                                    </a>

                                                    <a
                                                    href="{{ route('delete-address',$address->id) }}" 
                                                    class="bottom_btn">{{ __('general.Remove') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="pagination-container">
                                {!! $addresses->appends(request()->input())->links('front.components.paginate') !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- add address starts -->
    <div class="modal fade theme-modal-2" id="add-address" tabindex="-1">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="fw-semibold">Add Profile</h3>
                    <button class="btn btn-close" type="submit" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add-address') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="title" class="form-label"> title</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                        placeholder="Enter title">
                                </div>
                                @error('title')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input id="fullName" name="fullName" type="text" class="form-control"
                                        placeholder="Full Name">
                                </div>
                                 @error('fullName')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="name4" class="form-label">Phone Number</label>
                                    <input name="phone" id="name4" type="tel" value=""
                                        class="form-control" placeholder="Enter Phone Number">
                                </div>
                                @error('phone')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="fullAddress" class="form-label">Full Address</label>
                                    <input id="fullAddress" name="fullAddress" type="text" class="form-control"
                                        placeholder="Full Address">
                                </div>
                                @error('fullAddress')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box">
                                    <label for="country" class="form-label">Country</label>
                                    <input id="country" name="country" type="text" class="form-control"
                                        placeholder="Country">
                                </div>
                                @error('country')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box">
                                    <label for="city" class="form-label">City</label>
                                    <input id="city" name="city" type="text" class="form-control"
                                        placeholder="City">
                                </div>
                                @error('city')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.your_location')}}</label>
                                        <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="{{ old('latitude') }}" >
                                        <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="{{ old('longitude') }}" >
                                        <div id="map" style="width:480px; height:300px"></div>
                                    </div>
                                </div>
                                @if ($errors->has('latitude') || $errors->has('longitude'))
                                    <span class="text-danger d-block">
                                        يرجى تحديد موقعك على الخريطة قبل المتابعة.
                                    </span>
                                @endif

                            </div>

                        </div>
                        <div class="mt-3 d-flex align-items-center justify-content-end gap-2">
                            <button class="btn btn-md btn-outline fw-bold" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-solid" type="submit" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add address end -->


    <!-- edit address starts -->
    <div class="modal fade theme-modal-2" id="edit-address" tabindex="-1">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="fw-semibold">edit Profile</h3>
                    <button class="btn btn-close" type="submit" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update-address') }}" method="post">
                        @csrf
                        <input type="hidden" id="address_id" name="id">
                    
                        <div class="row g-3">
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="title" class="form-label">Title</label>
                                    <input id="EditTitle" name="title" type="text" class="form-control" placeholder="Enter title" value="">
                                </div>
                                @error('title')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input id="EditfullName" name="fullName" type="text" class="form-control" placeholder="Full Name">
                                </div>
                                @error('fullName')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input id="Editphone" name="phone" type="tel" class="form-control" placeholder="Enter Phone Number">
                                </div>
                                @error('phone')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="fullAddress" class="form-label">Full Address</label>
                                    <input id="EditfullAddress" name="fullAddress" type="text" class="form-control" placeholder="Full Address">
                                </div>
                                @error('fullAddress')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <label for="country" class="form-label">Country</label>
                                    <input id="Editcountry" name="country" type="text" class="form-control">
                                </div>
                                @error('country')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <label for="city" class="form-label">City</label>
                                    <input id="Editcity" name="city" type="text" class="form-control">
                                </div>
                                @error('city')
                                    <span class="text-danger" >
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.your_location') }}</label>
                                        <input type="hidden" id="Editlatitude" name="latitude" value="{{ old('latitude') }}">
                                        <input type="hidden" id="Editlongitude" name="longitude" value="{{ old('longitude') }}">
                                        <div id="Editmap" style="width: 100%; height: 300px;"></div>
                                    </div>
                                </div>
                                @if ($errors->has('latitude') || $errors->has('longitude'))
                                    <span class="text-danger d-block">
                                        يرجى تحديد موقعك على الخريطة قبل المتابعة.
                                    </span>
                                @endif
                            </div>
                    
                            <div class="mt-3 d-flex align-items-center justify-content-end gap-2">
                                <button class="btn btn-md btn-outline fw-bold" type="button" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-solid" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- edit address end -->


@push('js')

    <script src="https://maps.googleapis.com/maps/api/js?key={{googleMapServerKey()}}"></script>
    {{-- add --}}
    <script>
        var geocoder = new google.maps.Geocoder();
        var marker = null;
        var map = null;
        function initialize() {
            var $latitude = document.getElementById('latitude');
            var $longitude = document.getElementById('longitude');
            var latitude = 24.695374620580868;
            var longitude = 46.68142318725586;
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


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var editAddressModal = document.getElementById('edit-address');

            editAddressModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget; // الزر الذي فتح المودال

                console.log("Button clicked:", button); // تأكد أن الزر تم التقاطه

                var id = button.getAttribute('data-id');
                var title = button.getAttribute('data-title');
                var fullName = button.getAttribute('data-fullname');
                var phone = button.getAttribute('data-phone');
                var fullAddress = button.getAttribute('data-fulladdress');
                var country = button.getAttribute('data-country');
                var city = button.getAttribute('data-city')
                var latitude = button.getAttribute('data-latitude')
                var longitude = button.getAttribute('data-longitude')

                document.getElementById('address_id').value = id;
                document.getElementById('EditTitle').value = title;
                document.getElementById('EditfullName').value = fullName;
                document.getElementById('Editphone').value = phone;
                document.getElementById('EditfullAddress').value = fullAddress;
                document.getElementById('Editcountry').value = country;
                document.getElementById('Editcity').value = city;
                document.getElementById('Editlatitude').value = latitude;
                document.getElementById('Editlongitude').value = longitude;
            });
        });
    </script>
    
    {{-- edit  --}}
    <script>

        var geocoder = new google.maps.Geocoder();
        var marker = null;
        var map = null;

        function initializeMap(latitude, longitude, mapElementId, latInputId, lngInputId) {
            var latLng = new google.maps.LatLng(latitude, longitude);
            var mapOptions = {
                zoom: 10,
                center: latLng,
                panControl: false,
                zoomControl: false,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById(mapElementId), mapOptions);

            if (marker) {
                marker.setMap(null);
            }

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: 'اسحبني!',
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function () {
                var latLng = marker.getPosition();
                document.getElementById(latInputId).value = latLng.lat();
                document.getElementById(lngInputId).value = latLng.lng();
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            var editAddressModal = document.getElementById('edit-address');

            editAddressModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var latitude = parseFloat(button.getAttribute('data-latitude')) || 24.695374620580868;
                var longitude = parseFloat(button.getAttribute('data-longitude')) || 46.68142318725586;

                document.getElementById('Editlatitude').value = latitude;
                document.getElementById('Editlongitude').value = longitude;

                // تأخير تحميل الخريطة حتى يظهر المودال بالكامل
                setTimeout(function () {
                    initializeMap(latitude, longitude, 'Editmap', 'Editlatitude', 'Editlongitude');
                }, 500);
            });
        });

        $('#findbutton').click(function (e) {
            var address = $("#Postcode").val();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    document.getElementById('Editlatitude').value = marker.getPosition().lat();
                    document.getElementById('Editlongitude').value = marker.getPosition().lng();
                } else {
                    alert("لم نتمكن من العثور على الموقع. السبب: " + status);
                }
            });
            e.preventDefault();
        });

    </script>

@endpush