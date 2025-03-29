@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains user content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="col-md-6 d-flex d-flex justify-content-start">
                                        <h1 class="card-title fw-bold">
                                            <th>{{__('general.map')}}</th>
                                            </h3>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div id="houses" content="{{ json_encode($users_house) }}"></div>
                                <div id="clients" content="{{ json_encode($users_client) }}"></div>
                                <div id="boula" content="{{ json_encode($users_mosque) }}"></div>


                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('general.your_location')}}</label>
                                                <input type="hidden" id="latitude" name="latitude" placeholder="latitude"
                                                    value="{{ old('latitude') }}">
                                                <input type="hidden" id="longitude" name="longitude"
                                                    placeholder="longitude" value="{{ old('longitude') }}">
                                                <div id="map" style="width:1000px; height:400px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

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
        // admin_admin
        object = JSON.parse($('#boula').attr('content'));
        console.log('boula', object);

        // admin_trainer
        object3 = JSON.parse($('#clients').attr('content'));
        console.log('clients', object3);

        // admin_company
        object4 = JSON.parse($('#houses').attr('content'));
        console.log('houses', object4);



        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(24.72106663666815, 46.63919448852539),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        let icon = {
            url: 'https://yousab-tech.com/worldpersonaltrainersuperstar/public/images/marker.png',
            scaledSize: {
                width: 50,
                height: 70
            }
        }
        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        // users_mosque
        object.map(item => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitude, item.longitude),
                icon: icon,
                map: map
            });

                let con = `<div class="card text-center">
                    <div class="card-body text-center">
                        <h5 class="card-title"> الأسم : ` + item.name + `</h5> <br><br>
                        <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                        <h5 class="card-title"> النوع: ` + item.type + `</h5><br><br>
                        
                        <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                        <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                    </div>
                </div>`
                con = con.replace(':lang', item.latitude);
                con = con.replace(':lat', item.longitude);

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {

                    var infowindow = new google.maps.InfoWindow({
                        Content: con,
                    })
                    infowindow.open(map, marker);
                }
            })(marker, i));
        })

        // stores
        object2.map(item => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitude, item.longitude),
                icon: pinSymbol('#81454F'),
                map: map
            });


            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    var infowindow = new google.maps.InfoWindow({
                        Content: `<div class="card text-center">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title"> الاسم : ` + item.name + `</h5> <br><br>
                                                    <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                                                    <h5 class="card-title"> النوع: ` + item.type + `</h5><br><br>

                                                    <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                                                    <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                                                    <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                </div>
                                            </div>`
                    })
                    infowindow.open(map, marker);
                }
            })(marker, i));
        })

        // users_client
        object3.map(item => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitude, item.longitude),
                icon: pinSymbol('#112CD6'),
                map: map
            });


            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    var infowindow = new google.maps.InfoWindow({
                        Content: `<div class="card text-center">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title"> الاسم : ` + item.name + `</h5> <br><br>
                                                    <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                                                    <h5 class="card-title"> النوع: ` + item.type + `</h5><br><br>

                                                    <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                                                    <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                                                    <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                </div>
                                            </div>`
                    })
                    infowindow.open(map, marker);
                }
            })(marker, i));
        })

        // users_house
        object4.map(item => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitude, item.longitude),
                icon: pinSymbol('#f8d12c'),
                map: map
            });


            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    var infowindow = new google.maps.InfoWindow({
                        Content: `<div class="card text-center">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title"> الأسم : ` + item.name + `</h5> <br><br>
                                                    <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                                                    <h5 class="card-title"> النوع: ` + item.type + `</h5><br><br>

                                                    <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                                                    <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                                                    <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                </div>
                                            </div>`
                    })
                    infowindow.open(map, marker);
                }
            })(marker, i));
        })

        // orders
        object5.map(item => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitude, item.longitude),
                icon: pinSymbol('red'),
                map: map
            });


            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    if (item.name != undefined) {
                        var infowindow = new google.maps.InfoWindow({
                            Content: `<div class="card text-center">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"> الأسم : ` + item.name + `</h5> <br><br>
                                                        <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                                                        <h5 class="card-title"> اجمالى الطلب : ` + item.total + `</h5><br><br>

                                                        <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                                                        <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                                                        <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                    </div>
                                                </div>`
                        })
                    } else {
                        var infowindow = new google.maps.InfoWindow({
                            Content: `<div class="card text-center">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"> اسم الجهة : ` + item.entity_name + `</h5> <br><br>
                                                        <h5 class="card-title"> رقم الجوال : ` + item.phone + `</h5><br><br>
                                                        <h5 class="card-title"> اجمالى الطلب : ` + item.total + `</h5><br><br>

                                                        <a href="https://wa.me/` + item.phone + `" target="__blank"  class="btn btn-success">الواتساب</a>
                                                        <a href="tel:` + item.phone + `" target="__blank"class="btn btn-warning">الجوال</a>
                                                        <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                    </div>
                                                </div>`
                        })

                    }
                    infowindow.open(map, marker);
                }
            })(marker, i));
        })

          // mosques
        object6.map(item => {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng( item.latitude,item.longitude),
                        icon: icon,
                        map: map
                    });


                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            var infowindow = new google.maps.InfoWindow({
                                // Content:`<a href="{{ route('front.home') }}">Home</a>`
                                Content: `<div class="card text-center">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title"> الأسم : `+item.mosque_name+`</h5> <br><br>
                                                    <h5 class="card-title"> رقم الجوال : `+item.phone+`</h5><br><br>
                                                    
                                                    <a href="https://wa.me/`+item.phone+`" target="__blank"  class="btn btn-success">الواتساب</a>
                                                    <a href="tel:`+item.phone+`" target="__blank"class="btn btn-warning">الجوال</a>
                                                    <a href="#" class="btn btn-primary">موقعه على الخريطة</a>
                                                </div>
                                            </div>`
                            })
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
            })

    </script>
@endpush




{{--  --}}
