 <!-- team area start -->
 <div class="team-area pd-top-115 pd-bottom-90" data-aos="fade-up-left">
     <div class="container">
         <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
             <div class="col-lg-6">
                 <div class="section-title text-center">
                     <h5 class="sub-title double-line">{{ page('team-section')->title }}</h5>
                     <h2 class="title">{{ page('team-section')->subtitle }}</h2>
                     <p class="content">{!! page('team-section')->description !!}</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="swiper mySwiper" data-aos="zoom-in">
                 <div class="swiper-wrapper">
                     @foreach ($teams as $team)
                     <div class="swiper-slide">
                         <div class="single-team-inner style-1 text-center">
                             <div class="thumb">
                                 <div class="img-team-container">

                                     <img src="{{ $team->image }}" alt="img">
                                 </div>
                                 <ul class="social-media">
                                     <li>
                                         <a class="facebook" href="{{ $team->facebook }}">
                                             <i class="fab fa-facebook-f"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a class="twitter" href="{{ $team->twitter }}">
                                             <i class="fab fa-twitter"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a class="instagram" href="{{ $team->instagram }}">
                                             <i class="fab fa-instagram"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a class="youtube" href="{{ $team->youtube }}">
                                             <i class="fab fa-youtube"></i>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="details-wrap">
                                 <div class="details-inner">
                                     <h4><a href="team-details.html">{{ $team->title }}</a></h4>
                                     <p>{{ $team->subtitle }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>

         </div>

     </div>
 </div>
 <!-- team area end -->