<!-- Contact Box Section Start -->
<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-image">
                                <img src="{{ asset('template/assets/images/inner-page/contact-us.png') }}"
                                    class="img-fluid blur-up lazyloaded" alt="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>{{ __('general.get_in_touch')}}</h3>
                            </div>

                            <div class="contact-detail">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>{{ __('general.call_us')}}</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>{{ contacts('phone')[0]->contact }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>{{ __('general.email')}}</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>{{ contacts('email')[0]->contact }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>{{ __('general.address')}}</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>{{ settings()->translate(app()->getLocale())->address }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title d-xxl-none d-block">
                    <h2>{{ __('general.contact_us')}}</h2>
                </div>
                <form id="rate-form" method="POST">
                    @csrf
                    <div class="right-sidebar-box">
                        <div class="row">
    
    
                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput1"
                                        class="form-label">{{ __('general.name')}}</label>
                                    <div class="custom-input">
                                        <input type="text" name="name" class="form-control @error('') invalid @enderror"
                                            id="exampleFormControlInput1" placeholder="{{ __('general.name')}}">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div id="name" class="err"></div>
                                </div>
                            </div>
    
                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput2"
                                        class="form-label">{{ __('general.email')}}</label>
                                    <div class="custom-input">
                                        <input type="email" name="email" class="form-control @error('') invalid @enderror"
                                            id="exampleFormControlInput2" placeholder="{{ __('general.email')}}">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div id="email" class="err"></div>
                                </div>
                            </div>
    
                            <div class="col-xxl-12 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput3"
                                        class="form-label">{{ __('general.phone')}}</label>
                                    <div class="custom-input">
                                        <input type="tel" name="phone" class="form-control @error('') invalid @enderror"
                                            id="exampleFormControlInput3" placeholder="{{ __('general.phone')}}"
                                            maxlength="10"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                                this.value.slice(0, this.maxLength);">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                    <div id="phone" class="err"></div>
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlTextarea"
                                        class="form-label">{{ __('general.rate')}}</label>
                                    <div class="custom-textarea">
                                        <textarea class="form-control @error('') invalid @enderror" id="rate" name="rate" id="exampleFormControlTextarea"
                                            placeholder="{{ __('general.rate')}}" rows="6"></textarea>
                                        <i class="fa-solid fa-rate"></i>
                                    </div>
                                    <div id="rate_err" class="err"></div>
    
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-animation btn-md fw-bold ms-auto"><i class="fa fa-spinner fa-spin d-none mx-1 " id="spinner-contact"></i> {{ __('general.send_rate')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Box Section End -->

<!-- Map Section Start -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="map-box">
            {!! settings()->map !!}
            {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2994.3803116994895!2d55.29773782339708!3d25.222534631321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!3m2!1d25.2048493!2d55.2707828!4m0!5e1!3m2!1sen!2sin!4v1652217109535!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </div>
</section>
<!-- Map Section End -->
<!-- Contact Start -->
{{-- <div class="container-fluid p-5">
    <div class="mb-5 text-center" data-aos="zoom-in-up">
        <h5 class="text-primary text-uppercase">{{ __('general.contact_us')}}</h5>
        <h1 class="display-5 text-uppercase mb-0">{{ __('general.get_in_touch')}}</h1>
    </div>
    <div class="row g-5 mb-5">
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-map-marker-alt fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.address')}}</h5>
                <p class="text-secondary mb-0" style="font-size: smaller">{{ settings()->translate(app()->getLocale())->address }}</p>
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-envelope fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.email')}}</h5>
                <p class="text-secondary mb-0">{{ contacts('email')[0]->contact }}</p>
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-phone fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.call_us')}}</h5>
                <p class="text-secondary mb-0">{{ contacts('phone')[0]->contact }}</p>
            </div>
        </div>
    </div>
    <div class="row gy-3">
        <div class="col-lg-6 col-sm-12">
            <div class="bg-dark p-5" data-aos="fade-right">
                <form id="rate-form" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="name" class="form-control @error('') invalid @enderror bg-light border-0 px-4" placeholder="{{ __('general.your_name')}}" style="height: 55px;">
                            <div id="name" class="err"></div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="email" class="form-control @error('') invalid @enderror bg-light border-0 px-4" placeholder="{{ __('general.your_email')}}" style="height: 55px;">
                            <div id="email" class="err"></div>
                        </div>
                        <div class="col-12">
                            <input type="text" name="phone" class="form-control @error('') invalid @enderror bg-light border-0 px-4" placeholder="{{ __('general.subject')}}" style="height: 55px;">
                            <div id="phone" class="err"></div>
                        </div>
                        <div class="col-12">
                            <textarea name="rate" class="form-control @error('') invalid @enderror bg-light border-0 px-4 py-3" id="rate" rows="4" placeholder="{{ __('general.rate')}}"></textarea>
                            <div id="rate_err" class="err"></div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3 btn-contact" type="submit"><i
                                class="fa fa-spinner fa-spin d-none " id="spinner-contact"></i> {{ __('general.send_rate')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12"  data-aos="fade-left">
                {!! settings()->map !!}
        </div>
    </div>
</div> --}}
<!-- Contact End -->


@push('js')
    <script>
        $('#rate-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $(".err").empty();
            $(".err").addClass("d-none");
            $('#btn-contact').attr('disabled', 'disabled').addClass('bg-secondary');
            $('#spinner-contact').removeClass('d-none');
            $.ajax({
                type: 'POST',
                url: "{{ route('front.rate.post') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': $("input[name=name]").val(),
                    'email': $("input[name=email]").val(),
                    'phone': $("input[name=phone]").val(),
                    'rate': $("#rate").val(),
                },
                success: (response) => {

                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success(response.success);

                    this.reset();
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled').removeClass(
                        'bg-secondary');
                    $('.alert-success').removeClass('d-none').html(response.success);
                    setTimeout(() => {
                        $('.alert-success').addClass('d-none').html(response.success);
                    }, 5000);
                },
                error: function(response) {
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled').removeClass('bg-secondary');

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                    if (response.responseJSON.errors.name) {
                        $("#name").append(
                            `<div class="alert alert-danger my-1"  style="text-align:initial !important">${response.responseJSON.errors.name}</div>`
                        );
                    }
                    if (response.responseJSON.errors.email) {
                        $("#email").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.email}</div>`
                        );
                    }
                    if (response.responseJSON.errors.phone) {
                        $("#phone").append(
                            `<div class="alert alert-danger my-1" style="text-align:initial !important">${response.responseJSON.errors.phone}</div>`
                        );
                    }

                    if (response.responseJSON.errors.rate) {
                        $("#rate_err").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.rate}</div>`
                        );
                    }

                }
            });
        });
    </script>
@endpush
