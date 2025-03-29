   <!-- Category Slider Start -->
   {{-- <section class="category-slider-section">
       <div class="container">
           <div class="product-category-slider">
               @foreach ($brands as $brand)
                   <div>
                       <a href="{{ route('front.brand.products', $brand->id) }}" class="category-box">
                           <img src="{{ $brand->image }}" class="img-fluid" alt="{{ $brand->title }}">
                           <h5>{{ $brand->title }}</h5>
                       </a>
                   </div>
               @endforeach
           </div>
       </div>
   </section> --}}
   <!-- Category Slider End -->


   <!-- section start -->
   <section class="section-b-space ratio_asos">
       <div class="collection-wrapper">
           <div class="container">
               <div class="row">
                   <div class="col-xl-3 col-lg-4 collection-filter">
                       <!-- side-bar collapse block stat -->
                       <div class="collection-filter-block">
                           <!-- brand filter start -->
                           <button class="collection-mobile-back filter-back">
                               <i class="ri-arrow-left-s-line"></i>
                               <span>{{ __('general.back') }}</span>
                           </button>
                           <form id="filterForm">
                               <div class="collection-collapse-block open">
                                   <div class="accordion collection-accordion" id="accordionPanelsStayOpenExample">
                                       <!-- Categories -->
                                       <div class="accordion-item">
                                           <h2 class="accordion-header">
                                               <button class="accordion-button pt-0" type="button"
                                                   data-bs-toggle="collapse" data-bs-target="#categories"
                                                   aria-expanded="true" aria-controls="categories">
                                                   {{ __('general.Categories') }}
                                               </button>
                                           </h2>
                                           <div id="categories" class="accordion-collapse collapse show">
                                               <div class="accordion-body">
                                                   <ul class="collection-listing">
                                                       @foreach ($categories as $category)
                                                           <li>
                                                               <div class="form-check">
                                                                   <input class="form-check-input filter-checkbox"
                                                                       type="checkbox" name="category_id[]"
                                                                       value="{{ $category->id }}"
                                                                       id="category_{{ $category->id }}">
                                                                   <label class="form-check-label"
                                                                       for="category_{{ $category->id }}">
                                                                       {{ $category->title }}
                                                                   </label>
                                                               </div>
                                                           </li>
                                                       @endforeach
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>

                                       {{-- <!-- Colors -->
                                       <div class="accordion-item">
                                           <h2 class="accordion-header">
                                               <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                   data-bs-target="#colors" aria-expanded="false"
                                                   aria-controls="colors">
                                                   {{ __('general.colors') }}
                                               </button>
                                           </h2>
                                           <div id="colors" class="accordion-collapse collapse show">
                                               <div class="accordion-body">
                                                   <ul class="collection-listing">
                                                       @foreach ($colors as $color)
                                                           <li>
                                                               <div class="form-check">
                                                                   <input class="form-check-input filter-checkbox"
                                                                       type="checkbox" name="color_id[]"
                                                                       value="{{ $color->id }}"
                                                                       id="color_{{ $color->id }}">
                                                                   <label class="form-check-label"
                                                                       for="color_{{ $color->id }}">
                                                                       {{ $color->title }}
                                                                   </label>
                                                               </div>
                                                           </li>
                                                       @endforeach
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>

                                       <!-- Sizes -->
                                       <div class="accordion-item">
                                           <h2 class="accordion-header">
                                               <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                   data-bs-target="#sizes" aria-expanded="false" aria-controls="sizes">
                                                   {{ __('general.sizes') }}
                                               </button>
                                           </h2>
                                           <div id="sizes" class="accordion-collapse collapse show">
                                               <div class="accordion-body">
                                                   <ul class="collection-listing">
                                                       @foreach ($sizes as $size)
                                                           <li>
                                                               <div class="form-check">
                                                                   <input class="form-check-input filter-checkbox"
                                                                       type="checkbox" name="size_id[]"
                                                                       value="{{ $size->id }}"
                                                                       id="size_{{ $size->id }}">
                                                                   <label class="form-check-label"
                                                                       for="size_{{ $size->id }}">
                                                                       {{ $size->title }}
                                                                   </label>
                                                               </div>
                                                           </li>
                                                       @endforeach
                                                   </ul>
                                               </div>
                                           </div>
                                       </div> --}}

                                       <!-- Price Range -->
                                       <div class="accordion-item">
                                           <h2 class="accordion-header">
                                               <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                   data-bs-target="#price" aria-expanded="false" aria-controls="price">
                                                   {{ __('general.price') }}
                                               </button>
                                           </h2>
                                           <div id="price" class="accordion-collapse collapse show">
                                               <div class="accordion-body price-body">
                                                   <div class="wrapper">
                                                       <div class="range-slider">
                                                           <label
                                                               for="priceRange">{{ __('general.price_range') }}</label>
                                                           <input type="range" id="priceRange" name="price"
                                                               min="0" max="1000" step="10"
                                                               value="500" oninput="updatePriceValue(this.value)">
                                                           <p>{{ __('general.min') }}: <span id="minPrice">0</span>
                                                               {{ __('general.sar') }} -
                                                               {{ __('general.max') }}: <span
                                                                   id="maxPrice">1000</span> {{ __('general.sar') }}
                                                           </p>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                   </div>
                               </div>

                               <button type="button" id="applyFilters"
                                   class="btn btn-primary mt-3">{{ __('general.apply_filters') }}</button>
                           </form>

                       </div>
                       <!-- side-bar collapse block end here -->
                   </div>
                   <div class="collection-content col-xl-9 col-lg-8">
                       <div class="page-main-content">
                           <button class="filter-btn btn mt-0">
                               <i class="ri-filter-fill"></i>
                               Filter
                           </button>
                           <div class="collection-product-wrapper">


                               <div class="product-wrapper-grid">
                                   <div class="row g-3 g-sm-4" id="productList">
                                       @foreach ($variations as $variation)
                                           @include('components.productCard', ['product' => $variation])
                                       @endforeach
                                   </div>
                               </div>
                               {!! $variations->links('front.components.paginate') !!}
                               {{-- <div class="product-pagination">
                                    <div class="theme-paggination-block">
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#!" aria-label="Previous">
                                                        <span>
                                                            <i class="ri-arrow-left-s-line"></i>
                                                        </span>
                                                        <span class="sr-only">{{ __('general.Previous') }}</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#!">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#!">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#!">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#!" aria-label="">
                                                        <span>
                                                            <i class="ri-arrow-right-s-line"></i>
                                                        </span>
                                                        <span class="sr-only"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> --}}
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </section>
   <!-- section End -->


   @push('js')
       <script>
           $(document).ready(function() {
               $("#applyFilters").on("click", function() {
                   let formData = $("#filterForm").serialize();
                   let minPrice = $("#priceRange").attr("min");
                   let maxPrice = $("#priceRange").val();

                   formData += `&min_price=${minPrice}&max_price=${maxPrice}`;

                   $.ajax({
                       url: "{{ route('front.products') }}",
                       type: "GET",
                       data: formData,
                       success: function(response) {
                           $("#productList").html($(response).find("#productList").html());
                       },
                       error: function() {
                           alert("Something went wrong. Please try again.");
                       },
                   });
               });

               $("#priceRange").on("input", function() {
                   let minValue = $(this).attr("min");
                   let maxValue = $(this).val();
                   $("#minPrice").html(minValue);
                   $("#maxPrice").html(maxValue);
               });
           });
       </script>







       {{-- <script>
        $(document).ready(function(){
            $('.product-category-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next" aria-label=""><i class="fas fa-chevron-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });

        $('.slick-arrow').empty();

    </script> --}}
   @endpush

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
