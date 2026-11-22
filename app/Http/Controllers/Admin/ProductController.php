<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Http\Resources\GoalResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Orderproduct;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\ProductOffer;
use App\Models\ProductVariation;
use App\Models\Size;
use App\Models\Store;
use App\Models\Subcategory;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;


class ProductController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $product;
    function __construct(Product $product)
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
        $this->product = $product;

    }

    public function index()
    {
        try {
            $products = $this->product->with(['productVariations.color', 'productVariations.size', 'category', 'subcategory'])->latest()->paginate(10);
            return view('admin.crud.products.index', compact('products'))
                ->with('i', (request()->input('product', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        $subcategories=Subcategory::get();

        $colors = Color::with('translations')->get();
        $sizes = Size::with('translations')->orderBy('id')->get();

        return view('admin.crud.products.create',compact('categories','subcategories','colors','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
public function store(ProductRequest $request)
{
    DB::beginTransaction();

    try {
        // create product
        $product = $this->product->create($this->productData($request));
        $this->syncVariations($product, $request->input('variations', []));

        // handle single + multiple images
        $product->uploadFile();
        $product->uploadFiles();

        DB::commit();

        return redirect()->route('products.index')
            ->with('success', trans('general.created_successfully'));

    } catch (\Exception $e) {
        DB::rollBack();
        \Log::error($e->getMessage());
        return redirect()->back()->with('error', __('general.something_wrong'))->withInput();
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = $product->images;
        return view('admin.crud.products.show', compact('product','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories=Category::get();
        $subcategories=Subcategory::get();
        $images = $product->images;
       
        $colors = Color::with('translations')->get();
        $sizes = Size::with('translations')->orderBy('id')->get();

        return view('admin.crud.products.edit', compact('product','categories','subcategories','images','colors','sizes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        DB::beginTransaction();
        try {
            // dd($request->all());
            $product->update($this->productData($request));
            $this->syncVariations($product, $request->input('variations', []));
            $product->updateFile();
            $product->uploadFiles();
      
            DB::commit();
            
            return redirect()->route('products.index', compact('product'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            DB::rollBack();
            \Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    /** Only real product columns (+ translations); the form must not write fields the table doesn't have. */
    private function productData(ProductRequest $request): array
    {
        $data = $request->only(['price', 'category_id', 'subcategory_id']);
        $data['subcategory_id'] = $request->filled('subcategory_id') ? $request->input('subcategory_id') : null;
        foreach (config('translatable.locales') as $locale) {
            if ($request->has($locale)) {
                $data[$locale] = $request->input($locale);
            }
        }
        return $data;
    }

    /**
     * Save the "colors, sizes & stock" rows. Rows are matched by color + size: existing ones are updated,
     * new ones created, removed ones deleted. A removed row that appears in past orders is kept with
     * stock 0 instead, so those orders keep showing their color / size.
     */
    private function syncVariations(Product $product, array $rows): void
    {
        $existing = $product->productVariations()->get()
            ->keyBy(fn ($v) => $v->color_id . '|' . ($v->size_id ?? ''));
        $seen = [];

        foreach ($rows as $row) {
            $colorId = (int) $row['color_id'];
            $sizeId = !empty($row['size_id']) ? (int) $row['size_id'] : null;
            $key = $colorId . '|' . ($sizeId ?? '');
            $seen[$key] = true;

            if ($variation = $existing->get($key)) {
                $variation->update(['quantity' => (int) $row['quantity']]);
            } else {
                $product->productVariations()->create([
                    'color_id' => $colorId,
                    'size_id' => $sizeId,
                    'quantity' => (int) $row['quantity'],
                    'price' => $product->getRawOriginal('price') ?? 0,
                ]);
            }
        }

        foreach ($existing as $key => $variation) {
            if (isset($seen[$key])) {
                continue;
            }
            if (Orderproduct::where('productvariation_id', $variation->id)->exists()) {
                $variation->update(['quantity' => 0]);
            } else {
                $variation->delete();
            }
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            $product->deleteFile();
            return redirect()->route('products.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    // public function newF()
    // {
        // validation
        // logic between try and  catch sensitive transaction  files by storage  
        // return
    // }

}