    <!-- log in section start -->
    <section class=" section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-md-12">     

                    <div id="boula"  content="{{ json_encode($users_mosque) }}"></div>
                    <div id="mosques"  content="{{ json_encode($mosques) }}"></div>

                    
                    <h6 class="text-content mb-2">{{ __('general.your_location')}}</h6>
                    <div class="mb-3 coupon-box input-group">
                        <input type="hidden" id="latitude" name="latitude" placeholder="latitude"   value="{{ old('latitude') }}">
                        <div class="err" id="latitude"></div>
                        <input type="hidden" id="longitude" name="longitude" placeholder="longitude"   value="{{ old('longitude') }}" >
                        <div class="err" id="longitude"></div>
                        <div id="map" style="width:1000px; height:400px"></div>
                            <div class="err" id="long"></div>
                            <div class="err" id="lat"></div>

                    </div>
     
                </div>
            </div>

              
        </div>
</section>

@push('js')

<script type="text/javascript">

    function pinSymbol(color) {
        return {
            path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z',
            fillColor: color,
            fillOpacity: 1,
            strokeColor: '#000',
            strokeWeight: 2,
            scale: 1
        };
    }



        // users_house
        object5=JSON.parse($('#mosques').attr('content'));
        console.log('mosques',object5);

        // users_mosque
        object=JSON.parse($('#boula').attr('content'));
        console.log('boula',object);

        
            
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(24.72106663666815, 46.63919448852539),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

                let icon = {
                    url: 'https://aslaltawfeer.com/images/bbIbhvxZ9BLX8vTH36yF64ZrjkYqlvYRKff6ROYZ.png',
                    scaledSize: { width: 50, height: 50 }
                    }

                var infowindow = new google.maps.InfoWindow();

                var marker, i;
                // users_mosque
                object.map(item => {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng( item.latitude,item.longitude),
                        icon: icon,
                        map: map
                    });
                       
                    let con = `<div class="card text-center">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"> الأسم : ` + item.name + `</h5> <br><br>
                                        <a href="{{ route('front.map_shopping', [':lat',':lang']) }}" class="btn btn-success">عربة التسوق</a>
                                    </div>
                                </div>`
                        con = con.replace(':lat', item.latitude);
                        con = con.replace(':lang', item.longitude);


                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            var infowindow = new google.maps.InfoWindow({
                                Content: con,
                            })
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                })
                // mosques
                object5.map(item => {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng( item.latitude,item.longitude),
                        icon: icon,
                        map: map
                    });

                    let con = `<div class="card text-center">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"> الأسم : ` + item.mosque_name + `</h5> <br><br>
                                        <a href="{{ route('front.map_shopping', [':lat',':lang']) }}" class="btn btn-success">عربة التسوق</a>
                                    </div>
                                </div>`
                    con = con.replace(':lat', item.latitude);
                    con = con.replace(':lang', item.longitude);

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            var infowindow = new google.maps.InfoWindow({
                                Content: con,
                            }) 
                        infowindow.open(map, marker);
                        }
                    })(marker, i));
                })

               
        
    </script>

@endpush