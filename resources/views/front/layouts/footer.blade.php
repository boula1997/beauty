       <!-- Footer Section Start -->
       <footer class="footer-style-1 mt-5">
           <section class="section-b-space darken-layout">
               <div class="container">
                   <div class="row footer-theme g-md-5 g-2">
                       <div class="col-xl-3 col-lg-5 col-md-6 sub-title">
                           <div>
                               <div class="footer-logo"><a href="{{ route('front.home') }}"><img alt="logo"
                                           class="img-fluid" src="{{ asset('images/ADClogo1.png') }}">
                                   </a></div>
                               <p> {{ __('general.footermessage') }}
                               </p>

                               <ul class="contact-list">
                                   <li><i class="ri-map-pin-line"></i>
                                       {{ __('general.mainAddress') }}</li>

                                   <li><i class="ri-phone-line"></i>
                                       0559942669 </li>
                                   <li><i class="ri-mail-line"></i>
                                       info@aloodot.com </li>
                               </ul>

                               <div class="footer-social mt-4">
                                   <ul>

                                       <li>
                                           <a target="_blank"
                                               href="https://x.com/aloodot_com?t=ScKqaVisbb6OIQqG33Yc4g&s=08">
                                               <i class="fa-brands fa-x-twitter"></i>
                                           </a>
                                       </li>

                                       <li>
                                           <a target="_blank" href="#">
                                               <i class="fa-brands fa-instagram"></i>
                                           </a>
                                       </li>

                                       <li>
                                           <a target="_blank" href="#">
                                               <i class="fa-brands fa-dribbble"></i>
                                           </a>
                                       </li>

                                       <li>
                                           <a target="_blank" href="#">
                                               <i class="fa-brands fa-behance"></i>
                                           </a>
                                       </li>

                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-md-6">
                           <div class="sub-title">
                               <div class="footer-title">
                                   <h4>{{ __('general.Categories') }}</h4>
                               </div>
                               <div class="footer-content">
                                   <ul>
                                       @foreach (categories()->take(6) as $category)
                                           <li><a href="{{ route('front.category.products', $category->id) }}"
                                                   class="text-content">{{ $category->title }}</a></li>
                                       @endforeach
                                   </ul>
                               </div>


                           </div>
                       </div>
                       <div class="col-xl col-lg-3 col-md-3">
                           <div class="sub-title">
                               <div class="footer-title">
                                   <h4>{{ __('general.UsefulLinks') }}</h4>
                               </div>
                               <div class="footer-content">
                                   <ul>
                                       <li><a class="text-content"
                                               href="{{ route('front.home') }}">{{ __('general.Home') }}</a></li>
                                       <li><a class="text-content"
                                               href="#collection">{{ __('general.Collections') }}</a>
                                       </li>
                                       <li><a class="text-content" target="__blank"
                                               href="{{ app()->getLocale() == 'en' ? 'https://aloodot.com/' : 'https://aloodot.com/index-' . app()->getLocale() . '.html' }}">{{ __('general.AboutUs') }}</a>
                                       </li>
                                       <li><a class="text-content"
                                               href="{{ route('front.products') }}">{{ __('general.products') }}</a>
                                       </li>
                                       {{-- <li><a class="text-content" href="offers.html">{{ __('general.Offers') }}</a></li> --}}
                                       <li><a class="text-content"
                                               href="{{ route('front.search') }}">{{ __('general.Search') }}</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-md-3">
                           <div class="sub-title">
                               <div class="footer-title">
                                   <h4>{{ __('general.HelpCenter') }}</h4>
                               </div>
                               <div class="footer-content">
                                   <ul>
                                       <li><a class="text-content"
                                               href="{{ route('show_profile','info') }}">{{ __('general.MyAccount') }}</a>
                                       </li>
                                       <li><a class="text-content"
                                               href="{{ route('show_profile','order') }}#order-tab-pane">{{ __('general.MyOrders') }}</a>
                                       </li>
                                       <li><a class="text-content"
                                               href="{{ route('show_profile','wallet') }}#wallet-tab-pane">{{ __('general.my_wallet') }}</a>
                                       </li>
                                       <li><a class="text-content"
                                               href="{{ route('show_profile','address') }}#address-tab-pane">{{ __('general.my_addresses') }}</a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </section>
           <div class="sub-footer dark-subfooter">
               <div class="container">
                   <div class="row">
                       <div class="col-xl-12 col-md-12 col-sm-12">
                           <div class="d-flex justify-content-center">
                               <p><i class="ri-copyright-line"></i> {{ settings()->copyright }}</p>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </footer>
       <!-- Footer Section End -->

       <!-- latest jquery-->
       <script src="{{ asset('front/assets/js/jquery-3.3.1.min.js') }}"></script>

       <!-- fly cart ui jquery-->
       {{-- <script src="{{ asset('front/assets/js/jquery-ui.min.js') }}"></script> --}}

       <!-- exitintent jquery-->
       <script src="{{ asset('front/assets/js/jquery.exitintent.js') }}"></script>
       <script src="{{ asset('front/assets/js/exit.js') }}"></script>

       <!-- slick js-->
       <script src="{{ asset('front/assets/js/slick.js') }}"></script>

       <!-- menu js-->
       <script src="{{ asset('front/assets/js/menu.js') }}"></script>

       <!-- lazyload js-->
       <script src="{{ asset('front/assets/js/lazysizes.min.js') }}"></script>

       <!-- Bootstrap js-->
       <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>

       <!-- Bootstrap Notification js-->
       <script src="{{ asset('front/assets/js/bootstrap-notify.min.js') }}"></script>

       <!-- Fly cart js-->
       {{-- <script src="{{ asset('front/assets/js/fly-cart.js') }}"></script> --}}

       <!-- Theme js-->
       <script src="{{ asset('front/assets/js/theme-setting.js') }}"></script>
       <script src="{{ asset('front/assets/js/script.js') }}"></script>
       <script src="front/assets/js/custom-slick-animated.js"></script>
       <!-- jQuery (Required for Slick) -->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

       <!-- Slick JS -->
       <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>


       <script>
           $(window).on('load', function() {
               setTimeout(function() {
                   $('#exampleModal').modal('show');
               }, 2500);
           });
       </script>

       <script>
           $(document).ready(function() {
               $('.product-category-slider').slick({
                   slidesToShow: 4, // Number of visible slides
                   slidesToScroll: 1,
                   arrows: true, // Enable navigation arrows
                   prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
                   nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
                   autoplay: true,
                   autoplaySpeed: 3000,
                   infinite: true,
                   responsive: [{
                           breakpoint: 992, // Tablet
                           settings: {
                               slidesToShow: 3
                           }
                       },
                       {
                           breakpoint: 768, // Mobile
                           settings: {
                               slidesToShow: 2
                           }
                       },
                       {
                           breakpoint: 480, // Smaller Mobile
                           settings: {
                               slidesToShow: 1
                           }
                       }
                   ]
               });
           });
       </script>


       <script>
           window.addEventListener('pageshow', function(event) {
               if (event.persisted) {
                   // Runs only when navigating back (from cache)
                   $.get('/countCart', function(response) {
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
                                 <h4>${item.title}</h4>
                                 (${item.options.colorTitle} * ${item.options.sizeTitle})
                                 <h4 class="quantity">
                                     <span class="priceQuantity">{{ __('general.sar') }} ${item.price}</span>
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
                   });
               }
           });
       </script>






       <script>
           function toastNow(message = "Successfully completed") {
               toastr.options = {
                   "closeButton": true,
                   "debug": false,
                   "newestOnTop": false,
                   "progressBar": true,
                   "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-right' : 'toast-top-right' }}",
                   "preventDuplicates": false,
                   "onclick": null,
                   "showDuration": "900",
                   "hideDuration": "2000",
                   "timeOut": "5000",
                   "extendedTimeOut": "1000",
                   "showEasing": "swing",
                   "hideEasing": "linear",
                   "showMethod": "fadeIn",
                   "hideMethod": "fadeOut"
               };

               toastr.success(message);
           }
       </script>





       @stack('js')

       </body>

       </html>
