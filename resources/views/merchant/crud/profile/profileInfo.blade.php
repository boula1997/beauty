            
    <div class="tab-pane fade show active" role="tabpanel"
        aria-labelledby="top-profile-tab">
        <h5 class="f-w-600">{{ __('general.profileInfo') }}</h5>
        <form method="POST" action="{{ route('merchant.update.profile') }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="merchantName">{{ __('general.merchantName') }}:</label>
                <input type="text" name="merchantName" class="form-control" 
                    value="{{ auth('merchant')->user()->merchantName }}" >
                    @error('merchantName') 
                        <small class="text-danger">
                            {{ $message }}
                        </small> 
                    @enderror
            </div>
    
            <div class="form-group">
                <label for="username">{{ __('general.username') }}:</label>
                <input type="text" name="username" class="form-control" 
                    value="{{ auth('merchant')->user()->username }}">
                    @error('username') 
                        <small class="text-danger">
                            {{ $message }}
                        </small> 
                    @enderror
            </div>
    
            <div class="form-group">
                <label for="phone">{{ __('general.phone') }}:</label>
                <input type="text" name="phone" class="form-control" 
                    value="{{ auth('merchant')->user()->phone }}">
                @error('phone') 
                    <small class="text-danger">
                        {{ $message }}
                    </small> 
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary mt-3">{{ __('general.save_changes') }}</button>
        </form>
    </div>
    
            