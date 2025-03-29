@extends('front.layouts.master')
@section('content')

<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3>{{ __('general.ForgotPassword') }}</h3>
                <div class="theme-card">
                    <form class="theme-form" action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="form-box">
                            <label for="email" class="form-label">{{ __('general.email') }}</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('general.email') }}" value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit"   class="btn btn-solid">{{ __('general.SendResetLink') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection



