 @if ($advertisements[0])
       <!-- Discount Section Start -->
       <section>
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-12">
                       <div class="banner-contain">
                           <div class="banner-contain hover-effect">
                               <img src="{{ asset($advertisements[2]->image) }}" class=" img-fluid bg-img blur-up lazyload"
                                   alt="">
                               <div class="banner-details p-center p-sm-4 p-3 text-white text-center">
                                   <div>
                                       <h3 class="lh-base fw-bold text-light">{{ $advertisements[2]->title }}</h3>
                                       <h6 class="coupon-code">{{ __('general.use_code')}}
                                           {{ $advertisements[2]->code }}</h6>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Discount Section End -->
   @endif
