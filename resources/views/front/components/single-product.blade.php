    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="collection-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="product-slick">
                                @foreach ($product->images as $image)
                                    <div><img src="{{ asset($image) }}" alt=""
                                            class="w-100 img-fluid blur-up lazyload"></div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-nav">
                                        @foreach ($product->images as $image)
                                            <div><img src="{{ asset($image) }}" alt=""
                                                    class="img-fluid blur-up lazyload"></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-page-details product-description-box sticky-details mt-0">

                                <h2 class="main-title"> {{ $product->title }} </h2>


                                <div class="price-text">
                                    <h3 class="price-text">
                                        <span id="productPrice">
                                            {{ productDetails($variation)['priceAfterOffer'] }}
                                            <img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR"
                                                width="20" height="20">
                                        </span>

                                        <div id="offerDetail">

                                            @if (productDetails($variation)['hasOffer'])
                                                <del>
                                                    {{ productDetails($variation)['price'] }}
                                                    <img class="currencySize" src="{{ asset('sar.svg') }}"
                                                        alt="SAR" width="20" height="20">
                                                </del><span class="discounted-price">
                                                    {{ productDetails($variation)['offerPer'] }}%
                                                    Off
                                                </span>
                                            @endif
                                        </div>
                                    </h3><span>{{ $product->category->title }} - {{ optional($product->subcategory)->title }}
                                    </span>
                                </div>




                                <div>
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="product-page-details product-form-box product-right-box d-flex
                                align-items-center flex-column my-0">

                                @php
                                    // Get the first color variation
                                    $firstColor = $variation;

                                    // Fetch sizes related to this first color
                                    $sizeIds = \App\Models\ProductVariation::where('color_id', $firstColor->color_id)
                                        ->where('product_id', $firstColor->product_id)
                                        ->pluck('size_id');

                                    $sizes = \App\Models\SizeTranslation::whereIn('size_id', $sizeIds)
                                        ->where('locale', app()->getLocale())
                                        ->get();
                                @endphp

                                <!-- Select Color -->
                                <h4 class="sub-title">Colour:</h4>
                                <div class="variation-box size-box">

                                    <ul class="image-box image color-selection">
                                        @foreach ($product->productVariations->unique('color_id') as $item)
                                            <li class="color-option {{ $variation->id==$item->id ? 'active' : '' }}"
                                                data-image="{{ asset($item->image) }}" id="{{ $item->color_id }}"
                                                product_id="{{ $item->product_id }}">
                                                <a>
                                                    <img src="{{ asset($item->image) }}" alt="" width="50">
                                                </a>
                                                <span class="d-block">{{ $item->color->title }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Select Size -->
                                <h4 class="sub-title mt-1">Size:</h4>
                                <div class="variation-box size-box">
                                    <ul class="image-box image size-selection">
                                        @foreach ($sizes as $size)
                                            <li class="size-option {{ $loop->first ? 'active' : '' }}"
                                                id="{{ $size->size_id }}">
                                                {{ $size->title }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>


                                <div class="product-buttons ">
                                    <div class="qty-section">
                                        <div class="qty-box">
                                            <div class="input-group qty-container">
                                                <span class="input-group-prepend">
                                                    <button type="button"
                                                        class="btn quantity-left-minus qty-btn-minus-single"
                                                        data-type="minus" data-field="">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity"
                                                    class="form-control input-number input-qty"
                                                    value="{{ getQuantity($product->id) }}"
                                                    hash="{{ getHash($product->id) }}">
                                                <span class="input-group-prepend">
                                                    <button type="button"
                                                        class="btn quantity-right-plus qty-btn-plus-single"
                                                        data-type="plus" data-field="">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add to Cart Button -->
                                <div class="product-buttons">
                                    <div class="d-flex align-items-center gap-3">
                                        <button class="btn btn-animation btn-solid hover-solid scroll-button disabled"
                                            type="button" id="outStock"> Out Of Stock
                                        </button>
                                        @if (auth('web')->user())
                                            <a href="#!" product_id="{{ $product->id }}"
                                                class="btn btn-solid buy-button addCart">Add to Cart
                                            </a>
                                        @else
                                            <a href="{{ route('user.login-view') }}" class="btn btn-solid buy-button">
                                                Add to Cart
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- related products -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>relatedproducts</h2>
                </div>
            </div>

            <!-- Product slider -->
            <section class="section-b-space pt-0 ratio_asos">
                <div class="container">
                    <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                        @foreach ($relatedProducts as $product)
                            @foreach ($product->productVariations as $variation)
                            @if ($variation->quantity>0)
                                @include('components.productCard', ['product' => $variation])
                            @endif
                            @endforeach
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- Product slider end -->
    </section>
    <!-- related products -->


    @push('js')
        <script>
            $(document).ready(function() {
                $('#outStock').hide();
                $('.buy-button').show();
                // Handle Color Selection
                $(".color-option").click(function() {
                    $(".color-option").removeClass("active");
                    $(this).addClass("active");

                    let color_id = $(this).attr('id');
                    let product_id = $(this).attr('product_id');

                    $.ajax({
                        url: `/color/sizes/${color_id}/${product_id}`,
                        type: 'GET',
                        success: function(response) {
                            console.log(response);

                            if (response.outStock) {
                                $('#outStock').show();
                                $('.buy-button').hide();
                            }

                            // Clear existing size options
                            $(".size-selection").empty();
                            $('#productPrice').html(response.productDetails.priceAfterOffer +
                                '<img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20"> '
                                );

                            if (response.productDetails.hasOffer) {
                                $('#offerDetail').empty();
                                $('#offerDetail').append(
                                    `<del>  ${response.productDetails.price} <img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20"></del>
                                <span class="discounted-price"> ${response.productDetails.offerPer}% Off</span>`
                                );
                            }

                            // Populate new size options
                            if (response.sizeTitle.length > 0) {
                                $.each(response.sizeTitle, function(index, title) {
                                    let size_id = response.sizeTiIds[index];
                                    let activeClass = index === 0 ? 'active' :
                                    ''; // Set first size as active

                                    $(".size-selection").append(
                                        `<li class="size-option ${activeClass}" id="${size_id}">${title}</li>`
                                    );
                                });
                            } else {
                                $(".size-selection").append(
                                    "<li class='size-option'>No sizes available</li>");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                });

                $(document).on("click", ".size-option", function() {
                    $(".size-option").removeClass("active");
                    $(this).addClass("active");

                    let size_id = $(this).attr('id');
                    let color_id = $(".color-option.active").attr('id');
                    let product_id = $(".color-option.active").attr('product_id');

                    $.ajax({
                        url: `/product/color/size/${product_id}/${color_id}/${size_id}`,
                        type: 'GET',
                        success: function(response) {
                            if (response.outStock) {
                                $('#outStock').show();
                                $('.buy-button').hide();
                            }

                            $('#productPrice').html(+
                                `${response.productDetails.priceAfterOffer} <img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20">`
                                );

                            if (response.productDetails.hasOffer) {
                                $('#offerDetail').empty();
                                $('#offerDetail').append(
                                    `<del>${response.productDetails.price} <img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20"></del>
                                <span class="discounted-price"> ${response.productDetails.offerPer}% Off</span>`
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                });

                // Handle Add to Cart
                $(".addCart").on("click", function(e) {
                    e.preventDefault();

                    var selectedColor = $(".color-option.active").attr("id");
                    var selectedSize = $(".size-option.active").attr("id");
                    var quantity = $("#quantity").val();

                    if (!selectedColor || !selectedSize) {
                        alert("Please select a color and size before adding to cart.");
                        return;
                    }

                    var product_id = $(this).attr("product_id");
                    let url = "{{ route('addTo.cart', [':id', ':color', ':size', ':quantity']) }}";
                    url = url.replace(":id", product_id);
                    url = url.replace(":color", selectedColor);
                    url = url.replace(":size", selectedSize);
                    url = url.replace(":quantity", quantity);

                    $.ajax({
                        type: "get",
                        url: url,
                        success: function(response) {
                            $(".cart-count").html(response.count);
                            $(".cart-total").html(response.total);

                            $('#cartProducts').empty();
                            $.each(response.cart, function(hash, item) {
                                $('#cartProducts').append(
                                    `<li class="cartItem">
                                    <div class="media">
                                        <a href="#!">
                                            <img src="${item.options.image}" class="img-fluid" alt="${item.title}">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="w-75">${item.title}</h4>
                                            (${item.options.colorTitle} * ${item.options.sizeTitle})
                                            <h4 class="quantity">
                                                <span class="priceQuantity">${item.price} <img class="currencySize" src="{{ asset('sar.svg') }}" alt="SAR" width="20" height="20"> </span>
                                            </h4>
    
                                            <div class="qty-box">
                                                <div class="input-group qty-container">
                                                    <button class="btn qty-btn-minus">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input type="number" readonly name="quantity" value="${item.quantity}" 
                                                        hash="${hash}" class="form-control input-qty">
                                                    <button class="btn qty-btn-plus">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </div>
    
                                            <div class="close-circle">
                                                <button class="close_button edit-button" data-bs-toggle="modal" data-bs-target="#variationModal">
                                                    <i class="ri-pencil-line"></i>
                                                </button>
                                                <button class="close_button delete-button" type="submit">
                                                    <i class="ri-delete-bin-line removeCart" hash="${hash}"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>`
                                );
                            });

                            toastNow(response.success);
                        },
                        error: function(response) {
                            alert(response.error);
                        }
                    });
                });

            });



            // Remaining scripts with similar changes
        </script>

        {{-- Item Count --}}
        <script>
            $(document).on('click', '.qty-btn-minus-single', function(e) {
                var inputQty = $(this).closest(".qty-container").find(".input-qty");

                var amount = Number(inputQty.val());
                if (amount > 1) {
                    inputQty.val(amount - 1);
                }

            });
            $(document).on('click', '.qty-btn-plus-single', function(e) {

                e.preventDefault();
                var inputQty = $(this).closest(".qty-container").find(".input-qty");
                inputQty.val(Number(inputQty.val()) + 1);
            });
        </script>
        {{-- Item Count --}}
    @endpush
