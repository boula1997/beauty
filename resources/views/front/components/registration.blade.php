<section class="login-page section-b-space">
    <div class="container">
        <h3>{{ __('general.CreateAccount') }}</h3>
        <div class="theme-card">
            <form class="theme-form" action="{{ route('user.register') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-box">
                            <label for="fullname" class="form-label">{{ __('general.fullname') }}</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" value="{{ old('fullname') }}" placeholder="{{ __('general.fullname') }}" >
                            @error('fullname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-box">
                            <label for="email" class="form-label">{{ __('general.email') }}</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="{{ __('general.email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-box">
                            <label for="phone" class="form-label">{{ __('general.phone') }}</label>
                            <input type="tel" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" placeholder="{{ __('general.phone') }}" >
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-box">
                            <label for="password" class="form-label">{{ __('general.Password') }}</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="{{ __('general.Password') }}" >
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-box">
                            <label for="password_confirmation" class="form-label">{{ __('general.password_confirmation') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="{{ __('general.Password') }}" >
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-solid w-auto">{{ __('general.CreateAccount') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
