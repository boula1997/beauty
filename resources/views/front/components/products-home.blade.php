
    
    <!-- Paragraph-->
    <div class="title1 section-t-space">
        <h4>{{ __('general.specialoffer') }}</h4>
        <h2 class="title-inner1">{{ __('general.LatestDrops') }}</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">{{__('general.productsessay')}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    
    <!-- Product slider -->
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                @foreach ($variations as $variation)
                @include('components.productCard',['variation'=>$variation])
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    @push('js')
    <script>
        // Handle Add to Cart
        $(".addCart").on("click", function(e) {
            e.preventDefault();

            var product_id = $(this).attr('product_id');
            var selectedColor = $(this).attr("color_id");
            var selectedSize = $(this).attr("size_id");

            if (!selectedColor || !selectedSize) {
                alert("Please select a color and size before adding to cart.");
                return;
            }

            var product_id = $(this).attr("product_id");
            let url = "{{ route('addTo.cart', [':id', ':color', ':size', ':quantity']) }}";
            url = url.replace(":id", product_id);
            url = url.replace(":color", selectedColor);
            url = url.replace(":size", selectedSize);
            url = url.replace(":quantity", 1);

            $.ajax({
                type: "get",
                url: url,
                success: function(response) {
                    $(".cart-count").html(response.count);
                    $(".cart-total").html(response.total);
                    $('#cartProducts').empty();
                    console.log('response.cart',response);
                    
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

    </script>
@endpush
    