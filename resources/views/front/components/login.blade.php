<!-- Section Start -->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>{{ __('general.Login') }}</h3>
                <div class="theme-card">
                    <form class="theme-form" action="{{ route('user.login') }}" method="post">
                        @csrf
                        <div class="form-box">
                            <label for="email" class="form-label">{{ __('general.email') }}</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="{{ __('general.email') }}" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-box">
                            <label for="password" class="form-label">{{ __('general.Password') }}</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="{{ __('general.Password') }}">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="mb-3">
                            <a href="{{ route('forget.password.reset') }}"
                                class="text-primary">{{ __('general.ForgotPassword') }}?</a>
                        </div>

                        <!-- reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="6Ldz_-4qAAAAAHKdsF3SNqLxfz09XWRpJV94nh87"></div>

                        <button type="submit" class="btn btn-solid">{{ __('general.Login') }}</button>
                    </form>
                </div>
            </div>

            <!-- Register Section -->
            <div class="col-lg-6">
                <h3>{{ __('general.Register') }}</h3>
                <div class="theme-card">
                    <p>{{ __('general.NoAccount') }}</p>
                    <a href="{{ route('user.register') }}" class="btn btn-outline-primary">
                        {{ __('general.RegisterHere') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Ends -->

<!-- Load reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
