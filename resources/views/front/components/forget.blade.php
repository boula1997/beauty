    <!-- log in section start -->
<section class="log-in-section section-b-space forgot-section">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('template/assets/images/inner-page/forgot.png')}}" class=" img-fluid img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>{{ __('general.welcome_to')}} {{ settings()->title }}</h3>
                                <h4>{{ __('general.forget')}} </h4>
                            </div>

                            <div class="input-box">
                                <form class="row g-4">
                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input type="email" class="form-control @error('') invalid @enderror" id="email"
                                                placeholder="{{ __('general.email_address')}}">
                                            <label for="email">{{ __('general.email_address')}}</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-animation w-100" type="submit">{{ __('general.forget')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- log in section end -->

<!-- Section: Design Block -->
{{-- <section class="text-center text-lg-start">
    <style>
        :lang(en).cascading-right {
            margin-right: -30px;
        }

        :lang(ar).cascading-right {
            margin-left: -30px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right"
                    style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                    <div class="card-body registration-padding shadow-5 text-center">
                        <h2 class="fw-bold mb-5">{{ __('general.login')}}</h2>
                        <form action="{{ route('user.login')}}" method="post">
                          @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->


                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label
                                    class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                    for="form3Example3">{{ __('general.email')}}</label>
                                <input type="email" name="email" id="form3Example3"
                                    class="form-control @error('') invalid @enderror @error('email') invalid @enderror" />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>

                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label
                                    class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                    for="form3Example4">{{ __('general.password')}}</label>
                                <input type="password" name="password" id="form3Example4"
                                    class="form-control @error('') invalid @enderror @error('password') invalid @enderror" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                            </div>

                            <div class="form-check d-flex justify-content-center mb-4">
                                <a href="{{ route('user.register-view') }}"
                                    class="form-check-label">{{ __('general.i_dont_have_account')}}</a>
                            </div>


                            <!-- Submit button -->

                            <div class="col-md-12 mb-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary py-md-3 px-md-5  d-lg-block">
                                    {{ __('general.login')}}
                                </button>
                            </div>

                            <!-- Register buttons -->
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="{{ asset('images/back1.jpg') }}" class=" img-fluid w-100 login-imageback rounded-4 shadow-4"
                    alt="img" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section> --}}
<!-- Section: Design Block -->
