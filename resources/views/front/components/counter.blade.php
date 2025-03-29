   <!-- Offer Section Start -->

   @if (isset($advertisements[0]))
       <section>
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-12">
                       <div class="offer-box hover-effect">
                           <img src="{{ asset($advertisements[0]->image) }}" class=" img-fluid bg-img blur-up lazyload"
                               alt="">
                           <div class="offer-contain p-4">
                               <div class="offer-detail">
                                   <h2 class="text-dark">{{ $advertisements[0]->title }} <span
                                           class="text-danger fw-bold">{{ page('counter')->subtitle }}</span></h2>
                                   <p class="text-content">{!! $advertisements[0]->translate(app()->getLocale())->description !!}</p>
                               </div>
                               <div class="offer-timing">
                                   <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                       <ul>
                                           <li>
                                               <div class="counter">
                                                   <div class="days">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="hours">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="minutes">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="counter">
                                                   <div class="seconds">
                                                       <h6></h6>
                                                   </div>
                                               </div>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   @endif
   <!-- Offer Section End -->

