    <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>{{ __('general.exclusive_products') }}</h4>
        <h2 class="title-inner1">{{ __('general.everyday_casual') }}</h2>
    </div>

    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            @foreach ($categories as $category)
                                <li class="{{ $loop->index == 0 ? 'current' : '' }}"><a
                                        href="tab-{{ $category->id }}">{{ $category->title }}</a></li>
                            @endforeach


                        </ul>
                        <div class="tab-content-cls">
                            @foreach ($categories as $category)
                                @if (count($category->products) > 0)
                                    <div id="tab-{{ $category->id }}"
                                        class="tab-content {{ $loop->index == 0 ? 'active default' : '' }}">
                                        <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                            @foreach ($category->products as $product)
                                                @foreach ($product->productVariations as $variation)
                                                    @include('components.productCard', [
                                                        'product' => $variation,
                                                    ])
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab product end -->
