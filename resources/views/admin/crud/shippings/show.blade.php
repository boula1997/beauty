@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'shippings', 'action' => 'show'])
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    @foreach (config('translatable.locales') as $locale)
                        <div class="col-md-4">
                            <h6 class="text-muted mb-1">{{ __('general.governorate') }} - @lang('general.' . $locale)</h6>
                            <p class="mb-0">{{ $shipping->translate($locale)?->title }}</p>
                        </div>
                    @endforeach
                    <div class="col-md-4">
                        <h6 class="text-muted mb-1">{{ __('general.fee') }}</h6>
                        <p class="mb-0">{{ number_format($shipping->fee, 2) }} {{ __('general.pound') }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                @can('shipping-edit')
                    <a href="{{ route('shippings.edit', $shipping) }}" class="btn btn-outline-primary px-4">{{ __('general.edit') }}</a>
                @endcan
                <a href="{{ route('shippings.index') }}" class="btn btn-outline-secondary px-4">{{ __('general.back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
