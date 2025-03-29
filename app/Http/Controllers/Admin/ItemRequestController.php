<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ItemRequestRequest;
use App\Http\Resources\GoalResource;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use App\Models\ItemRequest;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\ItemRequestOffer;
use App\Models\ItemRequestVariation;
use App\Models\Size;
use App\Models\Store;
use App\Models\Subcategory;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;


class ItemRequestController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $itemRequest;
    function __construct(ItemRequest $itemRequest)
    {
        $this->middleware('permission:itemRequest-list|itemRequest-create|itemRequest-edit|itemRequest-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:itemRequest-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:itemRequest-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:itemRequest-delete', ['only' => ['destroy']]);
        $this->itemRequest = $itemRequest;

    }

    public function index()
    {
        try {
            $itemRequests = $this->itemRequest->latest()->paginate(10);
            return view('admin.crud.itemRequests.index', compact('itemRequests'))
                ->with('i', (request()->input('itemRequest', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
        return view('admin.crud.itemRequests.create',compact('categories','subcategories','brands','stores','sizes','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequestRequest $request)
    {
        DB::beginTransaction();
        try {
            // dd($request->all());
            $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage','action');
            if($request->offers)
            {
                $itemRequestOffer=ItemRequestOffer::create([
                    'startDate' => $request->startDate,
                    'endDate' => $request->endDate,
                    'percentage' => $request->percentage,
                ]);

                $data['itemRequestOffer_id']=$itemRequestOffer->id;
            }

        
            $itemRequest = $this->itemRequest->create($data);
            $itemRequest->uploadFile();
            $itemRequest->uploadFiles();
            
            // Create the variations
            foreach ($request->variations as $variationData) {
               $variation= ItemRequestVariation::create([
                    'itemRequest_id' => $itemRequest->id,
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
       
            return redirect()->route('itemRequests.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            // dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemRequest  $itemRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ItemRequest $itemRequest)
    {
        $images = $itemRequest->images;
        return view('admin.crud.itemRequests.show', compact('itemRequest','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemRequest  $itemRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemRequest $itemRequest)
    {
        $data = json_decode($itemRequest->data, true); // Decode JSON into an associative array
        $delImages=isset($data['delimages'])?$data['delimages']:[];
        $product = $itemRequest->product; // Decode JSON into an associative array
        $categories=Category::get();
        $subcategories=Subcategory::get();
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
       // Assume $itemRequest->images is a JSON string of images
        $allImages = json_decode($itemRequest->images, true); // Decode to an associative array

        // Retrieve product->images and decode it, if stored as JSON
        $productImages = json_decode($product->images, true); // Decode to an associative array

        // Merge the two arrays
        $mergedImages = array_merge($productImages ?? [], $allImages ?? []); // Ensure arrays are not null

        // Optionally encode the merged array back to JSON if you need to store it in the database
        $images = $mergedImages;
        $image = json_decode($itemRequest->image);
        $variationImages = json_decode($itemRequest->variationImages);
        $availableSizes = $itemRequest->store->sizes;  // Retrieve available sizes for the store
        $availableColors = $itemRequest->store->colors; 
        return view('admin.crud.itemRequests.edit', compact('delImages','data','product','itemRequest','categories','subcategories','brands','stores','sizes','colors','images','image','variationImages','availableSizes','availableColors'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $itemRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemRequest $itemRequest)
    {
        DB::beginTransaction();
        try {
    
            $data = $request->except('image','images','profile_avatar_remove','variations','offers','startDate','endDate','percentage','action');
            $product=$itemRequest->product;

            
            if($request->action=="accept"){
                if($itemRequest->type=="create"){
                    $product=Product::create($data);
                    $product->uploadFile();
                    $product->uploadFiles();
                }else{
                    $product->update($data);
                    $product->updateFile();
                    $product->updateFiles();
                }
    
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

                $itemRequest->update(['status'=>'accepted','reviewer_id'=>auth('admin')->user()->id]);
            }
           else{
            
               $itemRequest->update(['status'=>'rejected','reviewer_id'=>auth('admin')->user()->id]);
           }

      
            DB::commit();
            
            return redirect()->route('itemRequests.index', compact('product'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with(['error' => $e->getMessage()])->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemRequest  $itemRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemRequest $itemRequest)
    {
        try {
            $itemRequest->delete();
            $itemRequest->deleteFile();
            return redirect()->route('itemRequests.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    // public function newF()
    // {
        // validation
        // logic between try and  catch sensitive transaction  files by storage  
        // return
    // }

}
