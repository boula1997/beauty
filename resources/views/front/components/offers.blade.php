    <!-- Banner Section Start -->
    <section class="bank-section overflow-hidden">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>{{__('general.offers')}}</h2>
            </div>
            <div class="product-border">
                <div class="no-arrow">
                    <div>
                        <div class="row m-0">
                            @foreach ($products as $product)
                                
                                @if ($loop->iteration <= 20)
                                    
                                        <div class="col-3 px-0 p-3">
                                            <div class="product-box wow fadeIn">
                                                <div class="product-image">
                                                    <a href="{{ route('front.show.product', $product->id) }}" class="position-relative">
                                                        <img src="{{ asset($product->image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                            @if (in_array($product->id,topSelling()))                                                            
                                                            <span
                                                                class="position-absolute top-0 right-5 start-100 translate-top badge rounded-pill bg-danger">
                                                                الاكثر مبيعا
                                                                <span class="visually-hidden">unread messages</span>
                                                            </span>
                                                            @endif
                                                    </a>
                                                    <ul
                                                        class="product-option justify-content-center eye-show bg-transparent text-white">

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <a href="{{ route('front.show.product', $product->id) }}">
                                                                <i class="fas fa-eye text-white fa-lg fs-1"></i>

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <div>

                                                        <a href="product-left-thumbnail.html">
                                                            <h6
                                                                class="name name-2 h-100 {{ in_array($product->id, topSelling()) ? 'text-danger' : '' }}">
                                                                {{ $product->title }}</h6>
                                                        </a>


                                                        <h6 class="sold weight textus-content fw-normal">
                                                            {{ $product->size}} {{ $product->translate(app()->getLocale())->unit}}</h6>
                                                            
                                                        <h6 class="sold weight textus-content fw-normal"> {{ $product->company->title}} </h6>

                                                    </div>



                                                    <div class="counter-box">
                                                        <h6 class="price"><span
                                                                class="theme-color">{{ $product->price_bd }}</span>
                                                            <del>{{ $product->price }}</del>
                                                            {{ app()->getLocale() == 'ar' ? 'ر.س' : '$' }}
                                                        </h6>


                                                        <div class="addtocart_btn pt-5">


                                                            @if (auth('web')->user())
                                                                <button
                                                                    class="add-button addcart-button btn buy-button text-light addCart"
                                                                    index="{{ $loop->index }}"
                                                                    product_id="{{ $product->id }}">
                                                                    <span>{{ __('general.add')}}</span>
                                                                    <i class="fa-solid fa-plus px-2"></i>
                                                                </button>
                                                            @else
                                                                <a href="{{ route('user.login') }}">
                                                                    <button
                                                                        class="add-button addcart-button btn buy-button text-light">
                                                                        <span>{{ __('general.add')}}</span>
                                                                        <i class="fa-solid fa-plus px-2"></i>
                                                                    </button>
                                                                </a>
                                                            @endif
                                                            <div
                                                                class="qty-box {{ isInCart($product->id) ? 'cart_qty open' : 'cart_qty' }}">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn qty-left-minus"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input
                                                                        class="form-control @error('') invalid @enderror input-number qty-input itemCount loop{{ $loop->index }}"
                                                                        type="text" name="itemCount"
                                                                        value="{{ getQuantity($product->id) }}"
                                                                        hash="{{ getHash($product->id) }}">
                                                                    <button type="button" class="btn qty-right-plus"
                                                                        data-type="plus" data-field="">
                                                                        <i class="fa fa-plus" aria-hidden=true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    @break
                                    
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="slider-bank-3 arrow-slider slick-height">
                @foreach($offers as $offer)
                    <div>
                        <div class="bank-offer">
                            <div class="bank-header">
                                <div class="bank-left w-100">
                                    <div class="bank-name">
                                        <h2>{{$offer->title}}</h2>
                                        <h5 class="discount text-content">{{$offer->subtitle}}</h5>
                                        <h5 class="valid text-content">{!!$offer->description!!}</h5>
                                    </div>
                                </div>

                                <div class="bank-right w-100">
                                    <img src="{{ asset($offer->image) }}" class=" img-fluid img-fluid" alt="">
                                </div>
                            </div>

                            <div class="bank-footer bank-footer-1">
                                <h4>{{__('general.code')}} :
                                    <input id="clipboardexample" value="{{$offer->code}}" /> 
                                </h4>
                                <button type="button" class="bank-coupon btn" id="copyText" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardexample">{{__('general.copy_code')}}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>
    <!-- Banner Section End -->



    @push('js')


    {{-- Item Count --}}
    <script>
        $('.itemCount').on('change', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).attr('hash');
            var quantity = $(this).val();
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
                    $('.cart-total-shipping').html((response.total) + 50);
                },
                error: function(response) {

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
        $('.itemCount').next().on('click', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).prev().attr('hash');
            var quantity = $(this).prev().val();
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
                    $('.cart-total-shipping').html((response.total) + 50);
                },
                error: function(response) {

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
        $('.itemCount').prev().on('click', function(e) {
            console.log('clicked!');
            e.preventDefault();
            var hash = $(this).next().attr('hash');
            var quantity = $(this).next().val();
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
                    $('.cart-total-shipping').html((response.total) + 50);

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

