@extends('admin.layouts.master')

@section('content')
<div class="page-body">
    @include('admin.components.breadcrumb', ['module' => 'shippings', 'action' => 'show'])

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    @foreach (config('translatable.locales') as $locale)
                        <dt class="col-sm-4">{{ __('general.title') }} - @lang('general.' . $locale)</dt>
                        <dd class="col-sm-8">{{ $shipping->translate($locale)?->title ?? '-' }}</dd>
                    @endforeach

                    <dt class="col-sm-4">{{ __('general.fee') }}</dt>
                    <dd class="col-sm-8">{{ $shipping->fee }}</dd>
                </dl>
            </div>
            <div class="card-footer">
                @can('shipping-edit')
                    <a href="{{ route('shippings.edit', $shipping) }}" class="btn btn-outline-primary px-5">{{ __('general.edit') }}</a>
                @endcan
                <a href="{{ route('shippings.index') }}" class="btn btn-outline-secondary px-5">{{ __('general.cancel') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
