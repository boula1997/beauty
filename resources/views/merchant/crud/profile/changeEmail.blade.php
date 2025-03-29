<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="top-profile-tab">
    <h5 class="f-w-600">Update Email</h5>

    {{-- ✅ إذا كان هناك OTP مُرسل، نعرض الفورم الخاص بالـ OTP --}}
    @if(session('otp_sent'))
        <form method="POST" action="{{ route('merchant.profile.verify.otp') }}">
            @csrf
            <div class="form-group">
                <label for="otp">{{ __('general.enter_otp') }}:</label>
                <input type="text" name="otp" class="form-control" required>
                
                @error('otp')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <input type="hidden" name="email" value="{{ session('new_email') }}">
            
            <button type="submit" class="btn btn-success mt-3">{{ __('general.verify_otp') }}</button>
        </form>
    @else
        <form method="POST" action="{{ route('merchant.profile.send.otp') }}">
            @csrf
            <div class="form-group">
                <label for="email">New Email:</label>
                <input type="email" name="new_email" class="form-control" value="{{ old('new_email') }}" required>
                
                @error('new_email')  
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">{{ __('general.send_otp') }}</button>
        </form>
    @endif
</div>
