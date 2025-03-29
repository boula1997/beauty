
<div class="tab-pane fade show active"  id="change-password"  role="tabpanel"
    aria-labelledby="top-profile-tab">
    <h5 class="f-w-600">{{ __('general.change_password') }}</h5>
    <form method="POST" action="{{ route('merchant.update.password') }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="current_password">{{ __('general.current_password') }}:</label>
            <input type="password" name="current_password" class="form-control" >
           
            @error('current_password') 
                <small class="text-danger">
                    {{ $message }}
                </small> 
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password">{{ __('general.new_password') }}:</label>
            <input type="password" name="new_password" class="form-control">
            @error('new_password') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>
        
        <div class="form-group">
            <label for="new_password_confirmation">{{ __('general.confirm_new_password') }}:</label>
            <input type="password" name="new_password_confirmation" class="form-control">
            @error('new_password_confirmation') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">{{ __('general.change_password') }}</button>
    </form>
</div>

    