         <!-- Vision section start -->
        <section class="container">
             <div class="row">
                 <h2 class="text-center mb-3">{{ page('about-index')->title }}</h2>
                 <div class="col-md-4 text-center d-flex justify-center align-items-center">

                     <img class=" img-fluid rounded float-right w-100"
                         src="{{ asset(isset(page('about-index')->images[0]->url) ? page('about-index')->images[0]->url : asset('default.jpg')) }}"
                         alt="">
                 </div>
                 <div class="col-md-8 p-5">
                     <div class="title title-flex">
                         <div>
                             <h2>{{ page('about-index')->subtitle }}</h2>
                             <div class="description">{!! page('about-index')->description !!}</div>
                         </div>
                     </div>
                     <div class="d-flex p-0 m-0 justify-between" dir="rtl">
                         <button onclick="location.href = '#';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.app_store')}}
                             <i class="fab fa-apple me-2  icon"></i>
                         </button>
                         <button onclick="location.href = '#';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.google_play')}}
                             <i class="fab fa-google-play me-2  icon"></i>
                         </button>
                         <button onclick="location.href = '{{ route('front.shopping_now') }}';"
                             class="btn btn-animation mt-xxl-4 mt-2 home-button  me-2  mx-5 ">{{ __('general.order_now')}}
                             <i class="fas fa-shopping-cart me-2  icon"></i>
                         </button>
                     </div>
                 </div>
             </div>
        </section>
   


   
