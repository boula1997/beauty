@extends('merchant.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'products', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header  d-flex justify-content-end">
                        <a href="{{route('merchant.products.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " id="editableTable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.image')}}</th>
                                        <th>{{__('general.title')}}</th>
                                        <th>{{__('general.category')}}</th>
                                        <th>{{__('general.subcategory')}}</th>
                                        <th>{{__('general.brand')}}</th>
                                        <th>{{__('general.store')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ $product->image }}"
                                                    alt="{{ $product->title }}"></td>
                                            <td>{{ $product->title }}</td>              
                                            <td>{{ $product->category->title }}</td>
                                            <td>{{ optional($product->subcategory)->title }}</td>
                                            <td>{{ $product->brand->title }}</td>
                                            <td>{{ $product->store->title }}</td>
                                            <td>
                                                @include('merchant.components.controls', [
                                                    'route' => 'merchant.products',
                                                    'role' => 'product',
                                                    'module' => $product,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $products->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
