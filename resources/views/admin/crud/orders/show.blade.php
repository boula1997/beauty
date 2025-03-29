@extends('admin.layouts.master')

@section('content')
<!-- Container-fluid starts--> 
        <div class="page-body">

            @include('admin.components.breadcrumb', [
                'module' => 'orders', 
                'action' => 'show',     
            ])
            
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="row product-adding">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-inner cart-section order-details-table">
                                        <div class="row g-4">
                                            <div class="col-xl-8">
                                                <div class="card-details-title">
                                                    <h3>Order Number <span>{{ $order->id }}</span></h3>
                                                </div>
                                                <div class="table-responsive table-details">
                                                    <table class="table cart-table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Items</th>  
                                                                <th class="text-end" colspan="2">
                                                                    <a href="javascript:void(0)"
                                                                        class="theme-color"></a>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($order->orderproducts as $orderproduct)
        
                                                                <tr class="table-order">
                                                                    <td>
                                                                        <a href="javascript:void(0)">
                                                                            <img src="{{ asset(isset($orderproduct->variation->image)?$orderproduct->variation->image:'default.jpg') }}"
                                                                                class="img-fluid blur-up lazyload" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <p>{{ $orderproduct->product->title }}</p>
                                                                        <h5>{{ $orderproduct->product->category->title }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <p>Quantity</p>
                                                                        <h5>{{ $orderproduct->count }}</h5>
                                                                    </td>
                                                                    <td>
                                                                        <p>Price</p>
                                                                        <h5>{{ $orderproduct->total }}</h5>
                                                                    </td>
                                                                </tr>

                                                            @endforeach

                                                        </tbody>
                                                        <tfoot>
                                                            @foreach(orderCheckoutData($order)['data'] as $item)
                                                                <tr class="table-order">
                                                                    <td colspan="3">
                                                                        <h5>{{ $item['key'] }} :</h5>
                                                                    </td>
                                                                    <td>
                                                                        <h4>{{ number_format($item['value'], 2) }}</h4>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                            {{-- <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                                                </td>
                                                                <td>
                                                                    <h4 class="theme-color fw-bold">{{ $order->total }}</h4>
                                                                </td>
                                                            </tr> --}}
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <form id="update-status-form" action="{{  route('order.update.status',$order->id) }}" method="POST">
                                                            @csrf
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-md-8">
                                                                    <label for="status" class="col-form-label">{{ __('Order Status') }}</label>
                                                                    <select class="custom-select form-control" name="status" id="status">
                                                                        @php
                                                                            $allowedStatuses = ['pending', 'in_processing', 'cancelled', 'shipped', 'out_for_delivery', 'delivered', 'returned', 'refunded'];
                                                                            $currentIndex = array_search($order->status, $allowedStatuses);
                                                                        @endphp
                                                                
                                                                        @foreach($allowedStatuses as $index => $status)
                                                                            @if(($order->status === 'cancelled' && $status === 'cancelled') || ($order->status !== 'cancelled' && $index >= $currentIndex))
                                                                                <option value="{{ $status }}" {{ old('status', $order->status) == $status ? 'selected' : '' }}>
                                                                                    {{ ucfirst(str_replace('_', ' ', $status)) }}
                                                                                </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-md-4 d-flex justify-content-start pt-4">
                                                                    <button type="submit" class="btn btn-outline-primary">{{ __('general.save') }}</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <h4>summery</h4>
                                                            <ul class="order-details">
                                                                <li>Order ID: {{ $order->id }}</li>
                                                                <li>Order Date:  {{ $order->created_at->format('M d, Y') }}</li>
                                                                <li>Order Total: {{ $order->total }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <h4>shipping address</h4>
                                                            <ul class="order-details">
                                                                <li>{{ $order->address->title }}</li>
                                                                <li>{{ $order->address->fullName }}</li>
                                                                <li>{{ $order->address->fullAddress }}</li>
                                                                <li>{{ $order->address->phone }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <div class="payment-mode">
                                                                <h4>Payment method</h4>
                                                                <p>Payment method: {{ isset($order->payment_method)?$order->payment_method:'NA' }}</p>
                                                                <p>Payment status: {{ isset($order->payment_status)?$order->payment_status:'NA' }}</p>
                                                                <p>Payment name: {{ isset($order->payment_name)?$order->payment_name:'NA' }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <div class="delivery-sec">
                                                                <h3>expected date of delivery: <span>{{ $order->created_at->addDays(5)->format('M d, Y') }}</span></h3>
                                                                {{-- <a href="order-tracking.html">track order</a> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    {{-- <div class="content-wrapper">
        <div class="container p-3">

            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'orders', 'action' => 'show'])
                </div>
                <div class="card-body p-5">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.name')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $order->name }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.email')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $order->email }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.address')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $order->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.total-delivery')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $order->total }} {{ __('general.pound')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <!-- general form elements -->
                    <div class="row">
                        <div class="col-md-6 d-flex d-flex justify-content-start">
                            <h1 class="card-title fw-bold">
                                <th>{{__('general.orderproducts')}}</th>
                            </h3>
                        </div>
                        <div class="col-md-6 d-flex d-flex justify-content-end">
                            <a href="{{ route('orderproduct.create',$order->id) }}">

                                <button
                                    class="btn btn-outline-primary px-5
                                            "><i
                                        class="fa fa-plus fa-sm px-2"
                                        aria-hidden="true"></i>{{__('general.add')}}</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <table id="example1" class="table  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('general.title')}}</th>
                                <th>{{__('general.count')}}</th>
                                <th>{{__('general.total')}}</th>
                                <th>{{__('general.controls')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderproducts as $orderproduct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $orderproduct->product->title }}</td>
                                    <td>{{ $orderproduct->count }}</td>
                                    <td>{{ $orderproduct->total }} {{ __('general.pound')}}</td>
                                    <td>
                                        @include('admin.components.controls', [
                                            'route' => 'orderproducts',
                                            'role' => 'orderproduct',
                                            'module' => $orderproduct,
                                        ])
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div> --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#update-status-form').off('submit').on('submit', function (e) {
                e.preventDefault(); 

                var form = $(this);
                var formData = form.serialize(); 
                var actionUrl = form.attr('action'); 
                
                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {
                        $('button[type="submit"]').prop('disabled', true); 
                    },
                    success: function (response) {
                        toastr.clear(); // مسح أي إشعارات سابقة
                        toastr.success(response.message); 
                    },
                    error: function (xhr) {
                        toastr.clear(); // مسح أي إشعارات سابقة
                        var errorMessage = xhr.responseJSON?.message || "Something went wrong";
                        toastr.error(errorMessage); 
                    },
                    complete: function() {
                        $('button[type="submit"]').prop('disabled', false);
                    }
                });
            });
        });

    </script>
@endpush


