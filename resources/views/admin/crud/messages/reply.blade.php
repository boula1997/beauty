@extends('admin.components.form')
@section('form_action', route('messages.emailReply', $message->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="container p-3">
        @include('admin.components.breadcrumb', ['module' => 'messages', 'action' => 'reply'])

        <div class="card card-custom">
            <div class="card-body">
                <p class="text-muted mb-3">
                    {{ __('general.email') }}: <strong>{{ $message->email }}</strong>
                </p>

                <div class="mb-3">
                    <label class="form-label">{{ __('general.subject') }}<span class="text-danger"> * </span></label>
                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                        value="{{ old('subject', 'Re: ' . $message->subject) }}">
                    @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('general.message') }}<span class="text-danger"> * </span></label>
                    <textarea name="message" rows="6" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="card-footer mb-5">
                <button type="submit" class="btn btn-outline-primary px-5">{{ __('general.send') }}</button>
                <a href="{{ route('messages.index') }}" class="btn btn-outline-danger px-5">{{ __('general.cancel') }}</a>
            </div>
        </div>
    </div>
@endsection
