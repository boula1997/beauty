    <!-- skill area start -->
    <div class="skill-area bg-relative bg-sky pd-top-120 pd-bottom-120">
        <img class="half-bg-right" src="{{ asset('assets/img/bg/4.webp') }}" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-5 mb-5 mb-lg-0">
                    <div class="section-title mb-0" data-aos="fade-up"
                    data-aos-duration="3000" >
                        <h5 class="sub-title right-line"> {{ page('skills-section')->title }} </h5>
                        <h2 class="title">{{ page('skills-section')->subtitle }}</h2>
                        {!! page('skills-section')->description !!}
                    </div>
                    <div class="skill-progress-area mt-4" data-aos="fade-right">
                        <div class="single-progressbar">
                            <h6>Web development</h6>
                            <div class="progress-item" id="progress-running">
                                <div class="progress-bg">
                                    <div id="progress" class="progress-rate" data-value="75">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="75">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>It solution</h6>
                            <div class="progress-item" id="progress-running-1">
                                <div class="progress-bg">
                                    <div id="progress-1" class="progress-rate" data-value="95">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="95">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>Web development</h6>
                            <div class="progress-item" id="progress-running-2">
                                <div class="progress-bg">
                                    <div id="progress-2" class="progress-rate" data-value="75">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="75">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>Data Research</h6>
                            <div class="progress-item mb-0" id="progress-running-3">
                                <div class="progress-bg">
                                    <div id="progress-3" class="progress-rate" data-value="60">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="60">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-lg-5" data-aos="fade-left">
                    <div class="row">
                        @if (count(page('skills-section')->images)== 3)
                            <div class="col-md-6">
                                <div class="thumb border-radius-5 mb-4 mb-md-0 image-hover-animate">
                                    <img src="{{ page('skills-section')->images[0]->url }}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumb border-radius-5 mb-4 image-hover-animate">
                                    <img src="{{ page('skills-section')->images[1]->url }}" alt="img">
                                </div>
                                <div class="thumb border-radius-5 image-hover-animate">
                                    <img src="{{ page('skills-section')->images[2]->url }}" alt="img">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- skill area end -->
