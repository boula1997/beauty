<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductVariationRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Size;
use Exception;
use Illuminate\Support\Facades\Log;

/**
 * Manages a product's variations (color + size + price + stock) from the dashboard.
 * Routes are nested under products: /dashboard/products/{product}/variations.
 */
class ProductVariationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index']]);
        $this->middleware('permission:product-edit', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    public function index(Product $product)
    {
        $variations = $product->productVariations()
            ->with(['color', 'size'])
            ->latest()
            ->paginate(20);

        return view('admin.crud.productVariations.index', compact('product', 'variations'));
    }

    public function create(Product $product)
    {
        $colors = Color::get();
        $sizes = Size::get();

        return view('admin.crud.productVariations.create', compact('product', 'colors', 'sizes'));
    }

    public function store(ProductVariationRequest $request, Product $product)
    {
        try {
            $product->productVariations()->create(
                $request->only(['title', 'color_id', 'size_id', 'price', 'quantity'])
            );

            return redirect()->route('products.variations.index', $product)
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
        }
    }

    public function edit(Product $product, ProductVariation $variation)
    {
        $this->ensureBelongsToProduct($product, $variation);

        $colors = Color::get();
        $sizes = Size::get();

        return view('admin.crud.productVariations.edit', compact('product', 'variation', 'colors', 'sizes'));
    }

    public function update(ProductVariationRequest $request, Product $product, ProductVariation $variation)
    {
        $this->ensureBelongsToProduct($product, $variation);

        try {
            $variation->update($request->only(['title', 'color_id', 'size_id', 'price', 'quantity']));

            return redirect()->route('products.variations.index', $product)
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
        }
    }

    public function destroy(Product $product, ProductVariation $variation)
    {
        $this->ensureBelongsToProduct($product, $variation);

        try {
            $variation->delete();

            return redirect()->route('products.variations.index', $product)
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    private function ensureBelongsToProduct(Product $product, ProductVariation $variation): void
    {
        abort_unless((int) $variation->product_id === (int) $product->id, 404);
    }
}
