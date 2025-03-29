<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductSizeRequest;
use Illuminate\Support\Facades\File;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Product;
use App\Models\Size;
use Exception;

class ProductSizeController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $productSize;
    function __construct(ProductSize $productSize)
    {
        $this->middleware('permission:productSize-list|productSize-create|productSize-edit|productSize-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:productSize-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:productSize-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:productSize-delete', ['only' => ['destroy']]);
        $this->productSize = $productSize;
    }

    public function index()
    {
        try {
            $productSizes = $this->productSize->latest()->get();
            return view('admin.crud.productSizes.index', compact('productSizes'))
                ->with('i', (request()->input('productSize', 1) - 1) * 5);
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
        $products=Product::get();
        $sizes=Size::get();
        return view('admin.crud.productSizes.create',compact('products','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSizeRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $productSize = $this->productSize->create($data);
            $productSize->uploadFile();
            return redirect()->route('productSizes.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSize $productSize)
    {
        return view('admin.crud.productSizes.show', compact('productSize'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSize $productSize)
    {
        // dd($productSize);
        $products=Product::get();
        $sizes=Size::get();
        return view('admin.crud.productSizes.edit', compact('productSize','products','sizes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $productSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSize $productSize)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $productSize->update($data);
            $productSize->updateFile();

            return redirect()->route('productSizes.index', compact('productSize'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSize $productSize)
    {
        try {
            $productSize->delete();
            $productSize->deleteFile();
            return redirect()->route('productSizes.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
