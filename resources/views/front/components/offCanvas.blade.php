   @auth
       <!-- Cart Offcanvas Start -->
       <div class="offcanvas offcanvas-end cart-offcanvas" tabindex="-1" id="cartOffcanvas">
           <div class="offcanvas-header">
               <h3 class="offcanvas-title">My Cart (<span class="cart-count">{{ count(cart()->getItems()) }}</span>)</h3>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
                   <i class="ri-close-line"></i>
               </button>
           </div>
           <div class="offcanvas-body">


               <div class="cart-media">
                   <ul class="cart-product" id="cartProducts">
                       @foreach (cart()->getItems() as $item)
                           <li class="cartItem">
                               <div class="media">
                                   <a href="#!">
                                       <img src="{{ $item->get('options')['image'] }}" class="img-fluid"
                                           alt="Classic Jacket">
                                   </a>
                                   <div class="media-body">
                                       <a href="#!">
                                           <h4 class="w-75">{{ cartItem($item->getId())->title }}</h4>
                                           ({{ $item->get('options')['colorTitle'] }} -
                                           {{ $item->get('options')['sizeTitle'] }})
                                       </a>
                                       <h4 class="quantity">
                                           <span> {{ $item->get('price') }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></span>
                                       </h4>

                                       <div class="qty-box">
                                           <div class="input-group qty-container">
                                               <button class="btn qty-btn-minus">
                                                   <i class="ri-subtract-line"></i>
                                               </button>
                                               <input type="number" readonly name="quantity"
                                                   value="{{ getQuantity($item->getId()) }}"
                                                   hash="{{ getHash($item->getId()) }}"class="form-control input-qty">
                                               <button class="btn qty-btn-plus">
                                                   <i class="ri-add-line"></i>
                                               </button>
                                           </div>
                                       </div>

                                       <div class="close-circle">
                                           <button class="close_button delete-button" type="submit">
                                               <i class="ri-delete-bin-line removeCart" hash="{{ $item->getHash() }}"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </li>
                       @endforeach

                   </ul>

                   <ul class="cart_total">
                       <li>
                           <div class="total">
                               <h5>SubTotal:<span><span
                                           class="cart-total">{{ cart()->getTotal() }}</span> <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"> </span>
                               </h5>
                           </div>
                       </li>
                       <li>
                           <div class="buttons">
                               <a
                                   href="{{ route('front.shopping') }}"class="btn view-cart">{{ __('general.ViewCart') }}</a>
                               <a href="{{ route('front.checkout') }}"
                                   class="btn checkout">{{ __('general.CheckOut') }}</a>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>

       <div class="modal fade theme-modal-2 variation-modal" id="variationModal">
           <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                   <button type="button" class="btn-close" data-bs-dismiss="modal">
                       <i class="ri-close-line"></i>
                   </button>
                   <div class="modal-body">
                       <div class="product-right product-page-details variation-title">
                           <h2 class="main-title">
                               <a href="product-page(accordian).html">Cami Tank Top (Blue)</a>
                           </h2>
                           <h3 class="price-detail">$14.25 <span>5% off</span></h3>
                       </div>
                       <div class="variation-box">
                           <h4 class="sub-title">Color:</h4>
                           <ul class="quantity-variant color">
                               <li class="bg-light">
                                   <span style="background-color: rgb(240, 0, 0);"></span>
                               </li>
                               <li class="bg-light">
                                   <span style="background-color: rgb(47, 147, 72);"></span>
                               </li>
                               <li class="bg-light active">
                                   <span style="background-color: rgb(0, 132, 255);"></span>
                               </li>
                           </ul>
                       </div>
                       <div class="variation-qty-button">
                           <div class="qty-section">
                               <div class="qty-box">
                                   <div class="input-group qty-container">
                                       <button class="btn qty-btn-minus">
                                           <i class="ri-subtract-line"></i>
                                       </button>
                                       <input type="number" readonly name="qty" class="form-control input-qty"
                                           value="1">
                                       <button class="btn qty-btn-plus">
                                           <i class="ri-add-line"></i>
                                       </button>
                                   </div>
                               </div>
                           </div>
                           <div class="product-buttons">
                               <button class="btn btn-animation btn-solid hover-solid scroll-button"
                                   id="replacecartbtnVariation14" type="submit" data-bs-dismiss="modal">
                                   <i class="ri-shopping-cart-line me-1"></i>
                                   Update Item
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Cart Offcanvas End -->

   @endauth


   @push('js')
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
                       $('.cart-total-shipping').html((response.total) + 50);
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
   @endpush
