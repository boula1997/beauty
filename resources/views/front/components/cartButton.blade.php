@if (auth('web')->user())
<button data-bs-toggle="modal"
data-bs-target="#addtocart" title="Add to cart">
<i product_id="{{ $variation->product_id }}"
    hash="{{ getHash($variation->product_id) }}"
    class="addCart ri-shopping-cart-line" color_id="{{$variation->color_id}}" size_id="{{$variation->size_id}}"  ></i>
</button>
@else
<a href="{{route('user.login-view')}}">
    <button 
    data-bs-target="" title="Add to cart">
    <i 
        class=" ri-shopping-cart-line"></i>
    </button>
</a>
@endif