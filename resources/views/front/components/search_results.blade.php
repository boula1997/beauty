@if ($products->count() > 0)
    <div id="searchResultsContent" class="container">
        <div class="row">
            @foreach ($products as $product)
            @foreach ($product->productVariations as $variation)
            @if ($variation->quantity>0)
                @include('components.productCard', ['product' => $variation])
            @endif
            @endforeach
            @endforeach
        </div>

        <div class="pagination-container search-pagination text-center">
            {!! $products->links('front.components.paginate') !!}
        </div>
    </div>
@else
    <p class="text-center">No results found.</p>
@endif
