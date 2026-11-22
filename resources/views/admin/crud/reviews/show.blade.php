@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'reviews', 'action' => 'show'])

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">{{ __('general.product') }}</dt>
                    <dd class="col-sm-9">{{ $review->product?->title ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('general.user') }}</dt>
                    <dd class="col-sm-9">{{ $review->user?->fullname ?? $review->user?->email ?? '-' }}</dd>

                    {{-- Show every stored review field as-is (the reviews schema is not defined in this repo's migrations). --}}
                    @foreach ($review->getAttributes() as $field => $value)
                        @continue(in_array($field, ['id', 'product_id', 'user_id', 'updated_at']))
                        <dt class="col-sm-3">{{ \Illuminate\Support\Str::headline($field) }}</dt>
                        <dd class="col-sm-9" style="white-space: pre-line;">{{ $value ?? '-' }}</dd>
                    @endforeach
                </dl>
            </div>
            <div class="card-footer">
                <a href="{{ route('reviews.index') }}" class="btn btn-outline-secondary px-5">{{ __('general.cancel') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
