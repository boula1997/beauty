<div class="container empty {{ count($products) == 0 ? '' : 'd-none' }}" data-aos="zoom-in">
    <div class="cart">
        <div class="col-sm-12 empty-cart-cls text-center">
            <img src="{{ asset('images/no-product-found.png') }}" width="40%" height="40%"
                class="img-fluid mb-4 mr-3">
            {{-- <h3><strong>{{ __('general.your_cart_is_empty')}}</strong></h3> --}}
            <h4>{{ __('general.check_again_for')}} </h4>
            {{-- <a href="{{ route('front.home') }}" class="btn btn-primary cart-btn-transform m-3"
                data-abc="true">{{ __('general.continue_shopping')}}</a> --}}


        </div>
    </div>
</div>
