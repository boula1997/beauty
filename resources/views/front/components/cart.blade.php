    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <!-- <div class="cart_counter">
                <div class="countdownholder">
                    Your cart will be expired in<span id="timer"></span> minutes!
                </div>
                <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">check out</a>
            </div> -->
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th>{{ __('general.image') }}</th>
                            <th>{{ __('general.productname') }}</th>
                            <th>{{ __('general.price') }}</th>
                            <th>{{ __('general.quantity') }}</th>
                            <th>{{ __('general.total') }}</th>
                            <th>{{ __('general.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (cart()->getItems() as $item)
                            <tr class="cartItem">
                                <td>
                                    <a href="{{route('front.show.product',cartItem($item->getId())->id)}}">
                                        <img src="{{  $item->get('options')['image']}}" class="img-fluid"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">{{ cartItem($item->getId())->title }} ({{ $item->get('options')['colorTitle']}} - {{ $item->get('options')['sizeTitle']}})</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group qty-container">
                                                    <button class="btn qty-btn-minus">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                    </button>
                                                    <input type="number" readonly="" name="quantity" value="{{ getQuantity($item->getId()) }}" hash="{{ getHash($item->getId()) }}" class="form-control input-qty" >
                                                    <button class="btn qty-btn-plus">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col table-price">
                                            <h2 class="td-color"> {{ cartItem($item->getId())->title }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></h2>
                                            <h3 class="td-color"> {{ $item->get('options')['colorTitle'] }}</h3>
                                            <h3 class="td-color"> {{ $item->get('options')['sizeTitle'] }}</h3>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">
                                                <a href="product-page(accordian).html" class="icon remove-btn">
                                                    <i class="ri-close-line"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-price">
                                    <h2>{{ $item->get('price') }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"> </h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group qty-container">
                                            <button class="btn qty-btn-minus">
                                                <i class="ri-arrow-left-s-line"></i>
                                            </button>
                                            <input type="number" readonly="" name="quantity" value="{{ getQuantity($item->getId()) }}" hash="{{ getHash($item->getId()) }}" class="form-control input-qty" >
                                            <button class="btn qty-btn-plus">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color"> <span class="itemTotal">{{ $item->get('price') * $item->get('quantity')}}</span> <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></h2>
                                </td>
                                <td>
                                    <a href="#!" class="icon remove-btn">
                                        <i class="ri-close-line removeCart" hash="{{ $item->getHash() }}"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="d-md-table-cell d-none">total price :</td>
                            <td class="d-md-none">totalprice:</td>
                            <td>
                                <h2><span> <span class="cart-total">{{ cart()->getTotal() }}</span> <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></span></h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="row cart-buttons">
                <div class="col-6">
                    <a href="{{ route('front.products') }}" class="btn btn-solid text-capitalize">{{ __('general.continueshopping') }}</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('front.checkout') }}" class="btn btn-solid text-capitalize">{{ __('general.checkout') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->


    @push('js')
        <script>

            $(document).on('click', '.removeCart', function(e) {
                $(this).addClass('disabled');
                e.preventDefault();
                var hash = $(this).attr('hash');
                let url = "{{ route('removeFrom.cart', ':hash') }}";
                url = url.replace(':hash', hash);
                $.ajax({
                    type: 'get',
                    url: url,
                    success: (response) => {
                        toastNow(response.success);
                        $(this).removeClass('disabled');
                        $(this).addClass('d-none').prev().addClass(
                            'btn btn-primary').attr('hash');
                        $(this).closest('.cartItem').remove();
                        $('.cart-count').html(response.count);

                        $('.cart-total').html(response.total);

                    },
                    error: function(response) {
                        alert(response.error);
                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");
                    }
                });
            });
        </script>

        {{-- Item Count --}}
        <script>
            $(document).on('click', '.qty-btn-minus', function(e) {
                var inputQty = $(this).closest(".qty-container").find(".input-qty");
                var amount = Number(inputQty.val());
                if (amount > 1) {
                    inputQty.val(amount - 1);
                }
                e.preventDefault();
                var hash = $(this).closest('.qty-container').find('.input-qty').attr('hash');
                var quantity = $(this).closest('.qty-container').find('.input-qty').val();


                let url = "{{ route('updateItem.count', [':hash', ':quantity']) }}";
                url = url.replace(':hash', hash);
                url = url.replace(':quantity', quantity);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'quantity': $("input[name=quantity]").val(),
                    },
                    success: (response) => {
                        $('.cart-count').html(response.count);
                        $('.cart-total').html(response.total);
                        $(this).closest('.cartItem').find('.itemTotal').html(response.price*response.quantity);
                        $('.cart-total-shipping').html((response.total) + 8);
                    },
                    error: function(response) {

                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");
                    }
                });
            });

            $(document).on('click', '.qty-btn-plus', function(e) {

                e.preventDefault();
                var inputQty = $(this).closest(".qty-container").find(".input-qty");
                inputQty.val(Number(inputQty.val()) + 1);
                var hash = $(this).closest('.qty-container').find('.input-qty').attr('hash');
                var quantity = $(this).closest('.qty-container').find('.input-qty').val();
                let url = "{{ route('updateItem.count', [':hash', ':quantity']) }}";
                url = url.replace(':hash', hash);
                url = url.replace(':quantity', quantity);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'quantity': $("input[name=quantity]").val(),
                    },
                    success: (response) => {
                        $('.cart-count').html(response.count);
                        $('.cart-total').html(response.total);
                        $(this).closest('.cartItem').find('.itemTotal').html(response.price*response.quantity);
                        $('.cart-total-shipping').html((response.total) + 8);

                    },
                    error: function(response) {

                        $(".err").addClass("d-block");
                        $(".err").removeClass("d-none");
                    }
                });
            });
        </script>
        {{-- Item Count --}}
    @endpush
