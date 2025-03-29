<?php

namespace App\Http\Controllers\Merchant;

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

        $this->itemRequest = $itemRequest;

    }

    public function index()
    {
        try {
            $itemRequests = $this->itemRequest->latest()->paginate(10);
            return view('merchant.crud.itemRequests.index', compact('itemRequests'))
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
        return view('merchant.crud.itemRequests.create',compact('categories','subcategories','brands','stores','sizes','colors'));
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
       
            return redirect()->route('merchant.itemRequests.index')
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
        return view('merchant.crud.itemRequests.show', compact('itemRequest','images'));
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
        $product = $itemRequest->product; // Decode JSON into an associative array
        $categories=Category::get();
        $subcategories=Subcategory::get();
        $brands=Brand::get();
        $stores=Store::get();
        $sizes=Size::get();
        $colors=Color::get();
        $images = $itemRequest->images;
        $availableSizes = $itemRequest->store->sizes;  // Retrieve available sizes for the store
        $availableColors = $itemRequest->store->colors; 
        return view('merchant.crud.itemRequests.edit', compact('data','itemRequest','categories','subcategories','brands','stores','sizes','colors','images','availableSizes','availableColors'));
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

            $itemRequest->update(['data'=>$request->all()]);
      
            DB::commit();
            
            return redirect()->route('merchant.itemRequests.index', compact('product'))
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
            return redirect()->route('merchant.itemRequests.index')
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
