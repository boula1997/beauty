<!-- service details page start -->
<div class="blog-area pd-top-120 mb-4">
    <div class="container">
        <div class="row">
            @foreach ($portfolio->images as $image)                
            <div class="col-lg-4 order-lg-first">
                <div class="blog-details-page-content">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <a href="{{asset($image->url)}}" data-lightbox="portoflio" data-title={{ $portfolio->title }}>  <img src="{{asset($image->url)}}" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- service details page end -->

@include('front.components.solution')