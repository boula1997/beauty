@if (count(cart()->getItems()) > 0)
    <!-- section start -->
    <section class="section-b-space checkout-section-2">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form method="post" action="{{ route('front.order.post') }}">
                        @csrf
                        <div class="row g-sm-4 g-3">
                            <div class="col-lg-7">
                                <div class="left-sidebar-checkout">
                                    <div class="checkout-detail-box">
                                        <ul>
                                            <li>
                                                <div class="checkout-box">
                                                    <div class="checkout-title">
                                                        <h4>{{ __('general.ShippingAddress') }}</h4>
                                                    </div>
                                                    <div class="checkout-detail">
                                                        <div class="row g-3">
                                                            @foreach (auth('web')->user()->addresses as $key => $address)
                                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                                    <div class="delivery-address-box">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="address_id"
                                                                            value="{{ $address->id }}"
                                                                            id="address_{{ $key }}"
                                                                            {{ $loop->first ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="address_{{ $key }}">
                                                                            <span
                                                                                class="name">{{ $address->fullName }}</span>
                                                                            <span class="address text-content"><span
                                                                                    class="text-title">Address :</span>
                                                                                {{ $address->fullAddress }}</span>
                                                                            <span class="address text-content"><span
                                                                                    class="text-title">Phone :</span>
                                                                                {{ $address->phone }}</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="checkout-box">
                                                    <div class="checkout-title">
                                                        <h4>{{ __('general.PaymentOptions') }}</h4>
                                                    </div>
                                                    <div class="checkout-detail">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="delivery-address-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="check9" name="paymentMethod"
                                                                        value="adc wallet" checked>
                                                                    <label class="form-check-label" for="check9">adc
                                                                        wallet
                                                                        {{ auth('web')->user()->balance }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="delivery-address-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="check10" name="paymentMethod"
                                                                        value="pay with cards">
                                                                    <label class="form-check-label" for="check10">pay
                                                                        with cards</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="delivery-address-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="check11" name="paymentMethod"
                                                                        value="stc pay">
                                                                    <label class="form-check-label" for="check11">stc
                                                                        pay</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="checkout-right-box">
                                    <div class="checkout-details">
                                        <div class="order-box">
                                            <div class="title-box">
                                                <h4>{{ __('general.SummaryOrder') }}</h4>
                                                <p>For a better experience, verify your goods and choose your shipping
                                                    option.</p>
                                            </div>

                                            <ul class="qty">
                                                @foreach (cart()->getItems() as $item)
                                                    @php
                                                        $cartItem = cartItem($item->getId());
                                                        $offerExpired = isset($cartItem->offer_expiry) && \Carbon\Carbon::now()->gt($cartItem->offer_expiry);
                                                        $outOfStock = $cartItem->stock_quantity <= 0;
                                                    @endphp
                                                    <li>
                                                        <div class="cart-image">
                                                            <img src="{{ asset($item->get('options')['image']) }}" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="cart-content">
                                                            <div>
                                                                <h4>{{ $cartItem->title }}</h4>
                                                                ({{ $item->get('options')['colorTitle'] }} - {{ $item->get('options')['sizeTitle'] }})
                                                                <h5>{{ $item->get('price') }} X {{ $item->get('quantity') }} 
                                                                    <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20">
                                                                </h5>
                                            
                                                                {{-- Offer Expired Warning --}}
                                                                @if ($item->get('options')['variation_id'] && !validOffer($item->get('options')['offer_id']))
                                                                    <p class="text-danger"><strong>⚠️ Offer expired!</strong> The discount is no longer available.</p>
                                                                @endif
                                            
                                                                {{-- Out of Stock Warning --}}
                                                                @if (!inStock($item->get('options')['variation_id'],$item->get('quantity'),"status"))
                                                                    <p class="text-danger"><strong>⚠️ Out of stock!</strong> This product remaining items is {{inStock($item->get('options')['variation_id'],$item->get('quantity'))}} items</p>
                                                                @endif
                                                            </div>
                                                            <span class="text-theme">
                                                                {{ $item->get('price') * $item->get('quantity') }} 
                                                                <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20">
                                                            </span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    <div class="checkout-details">
                                        <div class="order-box">
                                            <div class="title-box">
                                                <h4>{{ __('general.BillingSummary') }}</h4>
                                            </div>
                                            <div class="custom-box-loader">
                                                <ul class="sub-total">
                                                    <li>Sub Total <span class="count">{{ cart()->getTotal() }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></span>
                                                    </li>
                                                    <li>{{ __('general.Shipping') }}<span class="count">8.00 <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="total">
                                                <li>{{ __('general.Total') }}<span
                                                        class="count">{{ cart()->getTotal() + 8 }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"> </span></li>
                                            </ul>
                                            <div class="text-end">
                                                <button type="submit"
                                                    class="btn order-btn">{{ __('general.PlaceOrder') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@else
    <!-- Empty Cart Message -->
    <section class="section-b-space empty-cart-section">
        <div class="container text-center">
            <h2>Your Cart is Empty</h2>
            <p>Looks like you haven't added anything to your cart yet.</p>
            <a href="{{ route('front.products') }}" class="btn btn-primary">Go to Shop</a>
        </div>
    </section>
@endif



@push('js')
    <script>
        window.addEventListener('pageshow', function(event) {
            if (window.location.pathname.includes('/checkout')) {
                $.get('/countCart', function(response) {
                    if (response.count==0) {
                        $(".checkout-section-2").replaceWith(`
                            <section class="section-b-space empty-cart-section">
                                <div class="container text-center">
                                    <h2>Your Cart is Empty</h2>
                                    <p>Looks like you haven't added anything to your cart yet.</p>
                                    <a href="/products" class="btn btn-primary">Go to Shop</a>
                                </div>
                            </section>
                        `);
                    }
                });
            }
        });


    </script>
@endpush
