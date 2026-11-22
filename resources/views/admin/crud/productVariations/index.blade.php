@extends('admin.layouts.master')

@section('content')
<div class="page-body">

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>@lang('general.variations') - {{ $product->title }}</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">@lang('general.products')</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.edit', $product) }}">{{ $product->title }}</a></li>
                        <li class="breadcrumb-item active">@lang('general.variations')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        @can('product-edit')
                            <a href="{{ route('products.variations.create', $product) }}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add_variation') }}</a>
                        @endcan
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('general.title') }}</th>
                                        <th>{{ __('general.color') }}</th>
                                        <th>{{ __('general.size') }}</th>
                                        <th>{{ __('general.price') }}</th>
                                        <th>{{ __('general.quantity') }}</th>
                                        <th>{{ __('general.controls') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($variations as $variation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $variation->title ?? '-' }}</td>
                                            <td>
                                                @if ($variation->color)
                                                    <span class="d-inline-block rounded-circle border align-middle"
                                                        style="width:16px;height:16px;background:{{ $variation->color->hexCode }}"></span>
                                                    {{ $variation->color->title }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $variation->size?->title ?? '-' }}</td>
                                            <td>{{ $variation->price }}</td>
                                            <td>
                                                <span class="badge {{ $variation->quantity > 0 ? 'bg-success' : 'bg-danger' }}">{{ $variation->quantity }}</span>
                                            </td>
                                            <td>
                                                @can('product-edit')
                                                    <a href="{{ route('products.variations.edit', [$product, $variation]) }}" title="{{ __('general.edit') }}">
                                                        <i class="fas fa-edit text-secondary fa-lg"></i>
                                                    </a>
                                                    <form action="{{ route('products.variations.destroy', [$product, $variation]) }}" method="post"
                                                        class="d-inline" onsubmit="return confirm('{{ __('general.delete_message') }}')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm p-0 mx-2" title="{{ __('general.delete') }}">
                                                            <i class="fas fa-trash text-secondary fa-lg"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">{{ __('general.no_variations') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $variations->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
