@if (count($subcategory->products) > 0)
<section>
    <div class="container-fluid-lg">
        <div class="title">
            <h2>{{ $subcategory->title }}</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="{{asset('template/assets/svg/leaf.svg#leaf')}}"></use>
                </svg>
            </span>
            <p>{{ page('product_home')->subtitle }}</p>
        </div>
        <div class="product-border">
            <div class="no-arrow">
                <div>
                    <div class="row m-0">
                        @foreach ($subcategory->products as $product)
                            @if ($loop->iteration <= 20)
                                <div class="col-md-3 col-sm-6 px-0 p-3">
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
                                        <div class="product-detail d-flex justify-content-center items-center">
                                            <div class="d-flex justify-content-center items-center">

                                                <a href="{{ route('front.show.product', $product->id) }}">
                                                    <h6
                                                        class="name name-2 h-100  {{ in_array($product->id, topSelling()) ? 'text-danger' : '' }}">
                                                        {{ $product->title }}</h6>
                                                </a>

                                                <h6 class="sold weight textus-content fw-normal">
                                                    {{ $product->size}} {{ $product->translate(app()->getLocale())->unit}}</h6>
                                            </div>

                                            <div class="counter-box ">
                                                <h6 class="price"><span
                                                        class="theme-color">{{ $product->price }}</span>
                                                    {{ app()->getLocale() == 'ar' ? 'ر.س' : '$' }}
                                                </h6>

                                                <div class="addtocart_btn pt-5 d-flex justify-content-center items-center">


                                                    @if (auth('web')->user())
                                                        <button
                                                            class="add-button addcart-button btn buy-button text-light addCart "
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
</section>
@endif


