    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2 class="mt-5">{{ page('newsletter')->title }}</h2>
                                    <h5>{{ page('newsletter')->subtitle }}</h5>
                                    <form method="post" id="newsletter-form">
                                        <div class="input-box">
                                            {{--  // TODO(boula): fix the newsletter by phone --}}
                                            
                                            <div class="row">
                                                <div class="col input-box">
                                                    <input type="name" name="name" class="form-control @error('') invalid @enderror d-inline"
                                                        placeholder="{{ __('general.name')}}">

                                                    <input type="tel" name="phone" class="form-control @error('') invalid @enderror d-inline"
                                                    placeholder="{{ __('general.phone')}}">

                                                    <i class="fa-solid fa-phone arrow"></i>
                                                </div>

                                                </div>
                                            <button class="sub-btn btn">
                                                <span class="d-sm-block d-none" type="submit"> <i
                                                        class="fa fa-spinner fa-spin d-none"
                                                        id="spinner-newsletter"></i>
                                                    {{ __('general.subscribe')}}</span>
                                                <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                        <div id="name" class="err"></div>
                                        
                                        <div id="phone" class="err"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->


    @push('js')
        <script>
            $('#newsletter-form').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $(".err").empty();
                $(".err").addClass("d-none");
                $('#btn-newsletter').attr('disabled', 'disabled').addClass('bg-secondary');
                $('#spinner-newsletter').removeClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('front.newsletter.post') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'name': $("input[name=name]").val(),
                        'phone': $("input[name=phone]").val(),
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
                        $('#spinner-newsletter').addClass('d-none');
                        $('#btn-newsletter').removeAttr('disabled').removeClass(
                            'bg-secondary');
                        $('.alert-success').removeClass('d-none').html(response.success);
                        setTimeout(() => {
                            $('.alert-success').addClass('d-none').html(response.success);
                        }, 5000);
                    },
                    error: function(response) {
                        $('#spinner-newsletter').addClass('d-none');
                        $('#btn-newsletter').removeAttr('disabled').removeClass('bg-secondary');

                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");

                        if (response.responseJSON.errors.phone) {
                            $("#phone").append(
                                `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.phone}</div>`
                            );
                        }
                        if (response.responseJSON.errors.name) {
                            $("#name").append(
                                `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.name}</div>`
                            );
                        }

                    }
                });
            });
        </script>
    @endpush
