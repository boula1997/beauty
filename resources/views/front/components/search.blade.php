    <!--section start-->
    <section class="authentication-page">
        <div class="container">
            <section class="search-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form class="form-header" action="{{ route('front.search') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="{{__('general.searchessay')}}......">
                                    <div class="input-group-append">
                                        <button class="btn btn-solid" id="buttonsearch" type="submit"><i class="ri-search-line"></i>{{ __('general.Search') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row g-sm-4 g-3">
                @foreach ($products as $product)                    
                @foreach ($product->productVariations as $variation)
                @if ($variation->quantity>0)
                    @include('components.productCard', ['product' => $variation])
                @endif
                @endforeach
                @endforeach
                {!! $products->links('front.components.paginate') !!}
            </div>
        </div>
    </section>
    <!-- product section end -->

@push('js')

@endpush