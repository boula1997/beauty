<div class="services-bar">
    <!-- services Section -->
    <h2>سابقة الاعمال</h2>

    <div class="row">
       
        @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">{{ $portfolio->title }}</h4>
                    <div  class="card-img">
                        <a href="{{ $portfolio->image }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}"><img style="margin: 1%" class="img-fluid" src="{{ $portfolio->image }}" alt="" /></a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    <!-- /.row -->
</div>
