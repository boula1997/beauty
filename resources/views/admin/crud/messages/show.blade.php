@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'messages', 'action' => 'show'])

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">{{ __('general.name') }}</dt>
                    <dd class="col-sm-9">{{ $message->name ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('general.email') }}</dt>
                    <dd class="col-sm-9">{{ $message->email ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('general.phone') }}</dt>
                    <dd class="col-sm-9">{{ $message->phone ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('general.subject') }}</dt>
                    <dd class="col-sm-9">{{ $message->subject ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('general.message') }}</dt>
                    <dd class="col-sm-9" style="white-space: pre-line;">{{ $message->message }}</dd>

                    <dt class="col-sm-3">{{ __('general.created_at') }}</dt>
                    <dd class="col-sm-9">{{ $message->created_at?->format('Y-m-d H:i') }}</dd>
                </dl>
            </div>
            <div class="card-footer">
                @can('message-reply')
                    <a href="{{ route('messages.reply', $message->id) }}" class="btn btn-outline-primary px-5">{{ __('general.reply') }}</a>
                @endcan
                <a href="{{ route('messages.index') }}" class="btn btn-outline-secondary px-5">{{ __('general.cancel') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
