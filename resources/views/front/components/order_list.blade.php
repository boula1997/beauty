    <!-- tracking page start -->
    <section class="tracking-page section-b-space">
        <div class="container">
            <div class="title-header mb-3">
                <h5>Order Number: #{{ $order->id }}</h5>
                <!-- <button class="btn btn-md theme-bg-color ms-auto">Invoice <i
                        class="ri-download-2-fill ms-2"></i></button> -->
            </div>

            <div class="table-responsive">
                <table class="table tacking-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Full Name</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderproducts as $item)
                            <tr>
                                <td class="product-image">
                                    <img src="{{ $item->product->variation->image }}" class="img-fluid" alt="">
                                </td>
                                <td>
                                    <h6>{{ $item->product->title }}</h6>
                                </td>
                                <td>
                                    <h6>{{ $item->variation->color->title }}</h6>
                                </td>
                                <td>
                                    <h6>{{ $item->variation->size->title }}</h6>
                                </td>
                                <td>
                                    <h6>{{ $item->variation->price }} <img class="currencySize"
                                            src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20">
                                    </h6>
                                </td>
                                <td>
                                    <h6>{{ $item->count }}</h6>
                                </td>
                                <td>
                                    <h6>{{ $item->total }} <img class="currencySize" src="{{ asset('sar.svg') }}"
                                            alt="SAR" width="20" height="20"></h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tracking Order Status Progress Bar -->
            <div class="order-status-progress my-4">
                @php
                    $statuses = ['pending', 'in_processing', 'shipped', 'out_for_delivery', 'delivered'];
                    $currentIndex = array_search($order->status, $statuses);
                @endphp

                <div class="progress" style="height: 30px; background-color: #e9ecef;">
                    @foreach ($statuses as $index => $status)
                        <div class="progress-bar 
                            {{ $index <= $currentIndex ? 'bg-success' : 'bg-secondary' }}"
                            role="progressbar" style="width: {{ 100 / count($statuses) }}%;"
                            aria-valuenow="{{ $index }}" aria-valuemin="0"
                            aria-valuemax="{{ count($statuses) }}">
                            {{ ucfirst(str_replace('_', ' ', $status)) }}
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="summary-details my-3">
                <div class="row g-4">
                    <div class="col-xxl-8 col-lg-12 col-md-7">
                        <div class="details-box">
                            <h3 class="order-title">Consumer Details</h3>
                            <div class="customer-detail tracking-wrapper">
                                <ul class="row g-3">
                                    <li class="col-sm-6">
                                        <label>Address:</label>
                                        <h4> {{ isset($order->address) ? $order->address->fullAddress : '' }} </h4>
                                    </li>
                                    <li class="col-sm-3">
                                        <label>Payment Mode:</label>
                                        <div class="d-flex align-items-center gap-2">
                                            <h4>{{ $order->payment_method }}</h4>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <label>Payment Status:</label>
                                        <div class="d-flex align-items-center gap-2">
                                            <h4>{{ $order->payment_status }}</h4>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <label>Order Status:</label>
                                        <div class="d-flex align-items-center gap-2">
                                            <h4>{{ $order->status }}</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-12 col-md-5">
                        <div class="details-box">
                            <h3 class="fw-semibold mb-3 order-title"> Summary </h3>
                            <ul class="tracking-total tracking-wrapper">
                                @foreach (orderCheckoutData($order)['data'] as $item)
                                    <li>{{ $item['key'] }} <span>{{ $item['value'] }} <img class="currencySize"
                                                src="{{ asset('sar.svg') }}" alt="SAR" width="20"
                                                height="20"></span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <!-- tracking page end -->
