<div class="col-xl-4 col-6 col-grid-box">
    <div class="basic-product theme-product-1">
        <div class="overflow-hidden">
            <div class="img-wrapper">

                <a href="{{ route('front.show.product', $variation->id) }}">

                    <div class="img-wrapper">
                        <img src="{{ asset($variation->image) }}" class="w-100 img-fluid blur-up lazyload" alt="">
                    </div>
                </a>

                <div class="cart-info">
                    @include('front.components.cartButton')

                    <a href="{{ route('front.show.product', $variation->id) }}">
                        <i class="ri-eye-line"></i>
                    </a>

                </div>
            </div>
            <div class="product-detail">

                <p class="d-block text-primary">{{ $variation->color->title }} - {{ $variation->size->title }}</p>
                <div class="brand-w-color">
                    <a class="product-title" href="{{ route('front.show.product', $variation->id) }}">
                        {{ Str::limit($variation->product->title, 20) }}
                    </a>


                    {{-- <div class="color-panel">
                        <span><img class="rounded img-fluid mx-1" style="height:30px;" src="{{$variation->product->brand->image}}" alt="">{{$variation->product->brand->title}}</span>
                    </div> --}}
                </div>
                <h6>{{ $variation->product->category->title }} - {{ optional(optional($variation->product)->subcategory)->title }}</h6>
                <div class="text-limit" style="--lines: 2;">
                    {!! $variation->product->description !!}
                </div>
                <h4 class="price mt-2"> {{ productDetails($variation)['priceAfterOffer'] }} <img class="currencySize"
                        src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20">
                    @if (productDetails($variation)['hasOffer'])
                        <del> {{ productDetails($variation)['price'] }} <img class="currencySize"
                                src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20">
                        </del><span class="discounted-price"> {{ productDetails($variation)['offerPer'] }}% Off
                        </span>
                    @endif
                </h4>
            </div>
        </div>
    </div>
</div>
