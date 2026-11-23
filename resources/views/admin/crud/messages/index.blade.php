@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    @include('admin.components.breadcrumb', [
        'module' => 'messages',
        'action' => 'index',
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('general.name') }}</th>
                                        <th>{{ __('general.email') }}</th>
                                        <th>{{ __('general.phone') }}</th>
                                        <th>{{ __('general.subject') }}</th>
                                        <th>{{ __('general.created_at') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $message)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($message->subject, 40) }}</td>
                                            <td>{{ $message->created_at?->format('Y-m-d H:i') }}</td>
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'messages',
                                                    'role' => 'message',
                                                    'module' => $message,
                                                ])
                                                @can('message-reply')
                                                    <a class="mx-2" href="{{ route('messages.reply', $message->id) }}" title="{{ __('general.reply') }}">
                                                        <i class="fas fa-reply text-secondary fa-lg"></i>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
