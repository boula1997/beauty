    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        
        <style>
            .articleItem {
                height: 300px;
                animation-duration: 3s;
            }

            .articleItem img {
                transition: all 0.7s ease-in-out;
                overflow: hidden;
                object-fit: cover;
            }

            .articleItem:hover img {
                transform: scale(1.2) rotate(10deg);
                /* transform: rotate(10deg); */
                transition: all 0.7s ease-in-out;
            }

            .card-title fw-bold {
                background-color: white;
                opacity: 0.9;
                color: #01a401;
                width: 150px;
                padding: 0;
                margin: 0;
                border-top-left-radius: 5px;
                opacity: 0.8;
            }

        </style>

        <!-- Portfolio Section -->
        <div class="portfolio-main mb-5">
            <h2>المقالات</h2>

            <div class="row">
                @foreach ($faqs as $faq)
                <div class="col-md-4 col-sm-12 articleItem mb-5 animate__animated animate__fadeInDown" style="height: 300px" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card" style="height: 300px">
                        <div class="card-img" style="height: 300px">
                            <h4 class="card-title fw-bold" style="position: absolute; bottom: 0; right:0; background: ">
                                <a href="{{ route('front.show.faq', ['id'=>$faq->id]) }}">{{ $faq->title }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
