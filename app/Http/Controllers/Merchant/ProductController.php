<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Http\Resources\GoalResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\ProductOffer;
use App\Models\ProductVariation;
use App\Models\Size;
use App\Models\Subcategory;
use App\Models\Store;
use App\Models\ItemRequest;
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
        $this->product = $product;

    }

    public function index()
    {
        try {
            $products = $this->product->latest()->paginate(10);
            return view('merchant.crud.products.index', compact('products'))
                ->with('i', (request()->input('product', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __($e->getMessage())]);
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
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
        $product=Product::first();
        $images=$product->images;
        return view('merchant.crud.products.create',compact('categories','subcategories','brands','stores','sizes','colors','product','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            // dd($request->all());
            $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage');
            ItemRequest::create([
                'store_id'=>$request->store_id,
                'data'=>json_encode($request->all()), 
                'type'=>'create', 
                'image'=>json_encode(storeImages()['image']), 
                'images'=>json_encode(storeImages()['images']), 
                'variationImages'=>json_encode(storeImages()['variationImages']),
            ]);
            
      
            DB::commit();
       
            return redirect()->route('merchant.products.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            // dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => __($e->getMessage())])->withInput();
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
        return view('merchant.crud.products.show', compact('product','images'));
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
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
        $images = $product->images;
        $availableSizes = $product->store->sizes;  // Retrieve available sizes for the store
        $availableColors = $product->store->colors; 
        return view('merchant.crud.products.edit', compact('product','categories','subcategories','brands','stores','sizes','colors','images','availableSizes','availableColors'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        DB::beginTransaction();
        try {
                  $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage');
                
                  
                  ItemRequest::create([
                    'store_id'=>$product->store_id,
                    'data'=>json_encode($request->all()), 
                    'product_id'=>$product->id, 
                    'type'=>'edit', 
                    'affected_fields'=>'edit', 
                    'image'=>json_encode(storeImages()['image']), 
                    'images'=>json_encode(storeImages()['images']), 
                    'variationImages'=>json_encode(storeImages()['variationImages']), 
                  ]);

                  DB::commit();
            
            return redirect()->route('merchant.products.index', compact('product'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => __($e->getMessage())])->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            ItemRequest::create([
                'store_id'=>$product->store_id,
                'data'=>"", 
                'type'=>'delete', 
            ]);
            return redirect()->route('merchant.products.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __($e->getMessage())]);
        }
    }

    // public function newF()
    // {
        // validation
        // logic between try and  catch sensitive transaction  files by storage  
        // return
    // }

}