    <!-- Portfolio details page start -->
    <div class="project-area pd-top-120 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-page-content">
                        <div class="single-blog-inner">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="details">
                                        <h2>{{ $portfolio->title }}</h2>
                                        {!! $portfolio->description !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img src="{{ $portfolio->image }}" alt="img">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Portfolio details page end -->
