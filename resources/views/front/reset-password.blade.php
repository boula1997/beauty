@extends('front.layouts.master')

@section('content')
<!-- Section Start -->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3>{{ __('general.ResetPassword') }}</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{ route('password.update.user') }}">
                        @csrf
                        
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ request()->token }}">
                        
                        <!-- Email Address -->
                        <div class="form-box">
                            <label for="email" class="form-label">{{ __('general.email') }}</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email', request()->email) }}" required autofocus>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-box mt-4">
                            <label for="password" class="form-label">{{ __('general.Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-box mt-4">
                            <label for="password_confirmation" class="form-label">{{ __('general.ConfirmPassword') }}</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-solid mt-4">{{ __('general.ResetPassword') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Ends -->
@endsection
