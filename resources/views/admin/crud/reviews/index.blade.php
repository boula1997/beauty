@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    @include('admin.components.breadcrumb', [
        'module' => 'reviews',
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
                                        <th>{{ __('general.product') }}</th>
                                        <th>{{ __('general.user') }}</th>
                                        <th>{{ __('general.created_at') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $review->product?->title ?? '-' }}</td>
                                            <td>{{ $review->user?->fullname ?? $review->user?->email ?? '-' }}</td>
                                            <td>{{ $review->created_at?->format('Y-m-d H:i') }}</td>
                                            <td>
                                                <a class="mx-2" href="{{ route('reviews.show', $review) }}" title="{{ __('general.show') }}">
                                                    <i class="fas fa-eye text-secondary fa-lg"></i>
                                                </a>
                                                @can('review-delete')
                                                    <form action="{{ route('reviews.destroy', $review) }}" method="post" class="d-inline"
                                                        onsubmit="return confirm('{{ __('general.delete_message') }}')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm p-0 mx-2" title="{{ __('general.delete') }}">
                                                            <i class="fas fa-trash text-secondary fa-lg"></i>
                                                        </button>
                                                    </form>
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
