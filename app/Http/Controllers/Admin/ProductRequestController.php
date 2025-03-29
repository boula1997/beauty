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


class ProductRequestController extends Controller
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
            $products = $this->product->latest()->paginate(10);
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
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
        return view('admin.crud.products.create',compact('categories','subcategories','brands','stores','sizes','colors'));
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
            // dd($request->all());
            $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage');
            if($request->offers)
            {
                $productOffer=ProductOffer::create([
                    'startDate' => $request->startDate,
                    'endDate' => $request->endDate,
                    'percentage' => $request->percentage,
                ]);

                $data['productOffer_id']=$productOffer->id;
            }

        
            $product = $this->product->create($data);
            $product->uploadFile();
            $product->uploadFiles();
            
            // Create the variations
            foreach ($request->variations as $variationData) {
               $variation= ProductVariation::create([
                    'product_id' => $product->id,
                    'color_id' => $variationData['color_id'],
                    'size_id' => $variationData['size_id'],
                    'price' => $variationData['price'],
                    'quantity' => $variationData['quantity'],
                ]);
                
                if (isset($variationData['image']) && $variationData['image']->isValid()) {
                    $file = $variationData['image'];
        
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images'), $fileName);
                    
                    $variation->file()->create(['url' => 'images/' . $fileName]);
                }
                
            }         
            DB::commit();
       
            return redirect()->route('products.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            // dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
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
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
        $images = $product->images;
        $availableSizes = $product->store->sizes;  // Retrieve available sizes for the store
        $availableColors = $product->store->colors; 
        return view('admin.crud.products.edit', compact('product','categories','subcategories','brands','stores','sizes','colors','images','availableSizes','availableColors'));
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
            // dd($request->all());
            $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage');
            
            $product->update($data);
            $product->updateFile();
            $product->uploadFiles();

            if (isset($request->variations)) {
                $product->productVariations()->delete();
        
                foreach ($request->variations as $variation) {
                    $product->productVariations()->create([
                        'size_id' => $variation['size_id'],
                        'color_id' => $variation['color_id'],
                        'price' => $variation['price'],
                        'quantity' => $variation['quantity'],
                    ]);
                }
            }

            if ($request->has('offers')) {
                
                if ($product->productOffer) {
                    $product->productOffer->update([
                        'startDate' => $request->startDate,
                        'endDate' => $request->endDate,
                        'percentage' => $request->percentage,
                    ]);
                } else {
                    
                    $productOffer = ProductOffer::create([
                        'startDate' => $request->startDate,
                        'endDate' => $request->endDate,
                        'percentage' => $request->percentage,
                    ]);
            
                   
                    $product->update(['productOffer_id' => $productOffer->id]);
                }
            } else {
                
                if ($product->productOffer) {
                    $product->update(['productOffer_id' => null]);
                    $product->productOffer->delete();
                }
            }
            

      
            DB::commit();
            
            return redirect()->route('products.index', compact('product'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
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
            $product->delete();
            $product->deleteFile();
            return redirect()->route('products.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


}