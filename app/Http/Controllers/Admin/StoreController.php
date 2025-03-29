<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class StoreController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $store;
    function __construct(Store $store)
    {
        $this->middleware('permission:store-list|store-create|store-edit|store-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:store-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:store-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:store-delete', ['only' => ['destroy']]);
        $this->store = $store;
    }

    public function index()
    {
        try {
            $stores = $this->store->latest()->paginate(10);
            return view('admin.crud.stores.index', compact('stores'))
                ->with('i', (request()->input('store', 1) - 1) * 5);
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
        $brands=Brand::get();
        return view('admin.crud.stores.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove','category_id','brand_id');
            $store = $this->store->create($data);
            $store->categories()->attach($request->category_id);
            $store->brands()->attach($request->brand_id);
            $store->uploadFile();
            return redirect()->route('stores.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('admin.crud.stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        // dd($store);
        $categories=Category::get();
        $brands=Brand::get();
        return view('admin.crud.stores.edit', compact('store','categories','brands'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {
        try {
            $data = $request->except('image','profile_avatar_remove','category_id','brand_id');
            $store->update($data);
            $store->categories()->sync($request->category_id);
            $store->brands()->sync($request->brand_id);
            $store->updateFile();

            return redirect()->route('stores.index', compact('store'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        try {
            $store->delete();
            $store->deleteFile();
            return redirect()->route('stores.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function categories($id){
        //id here refers to category id
        $store =Store::find($id);
        return response()->json(['data'=>$store->categories]);
    }

    public function brands($id){
        //id here refers to category id
        $store =Store::find($id);
        return response()->json(['data'=>$store->brands]);
    }

    public function subcategories($id){
        //id here refers to category id
        $category =Category::find($id);
        return response()->json(['data'=>$category->subcategories]);
    }

    public function getVariations($storeId)
    {
        $store = Store::with(['sizes', 'colors'])->findOrFail($storeId);
        return response()->json([
            'sizes' => $store->sizes,
            'colors' => $store->colors,
        ]);
    }

    
}