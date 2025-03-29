<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BrandRequest;
use Illuminate\Support\Facades\File;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class BrandController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $brand;
    function __construct(Brand $brand)
    {
        $this->middleware('permission:brand-list|brand-create|brand-edit|brand-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:brand-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:brand-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:brand-delete', ['only' => ['destroy']]);
        $this->brand = $brand;
    }

    public function index()
    {
        try {
            $brands = $this->brand->orderBy('sort')->paginate(10);
            return view('admin.crud.brands.index', compact('brands'))
                ->with('i', (request()->input('brand', 1) - 1) * 5);
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
        return view('admin.crud.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $data['isTop'] = $request->has('isTop') ? 1 : 0;
            $brand = $this->brand->create($data);
            $brand->uploadFile();
            return redirect()->route('brands.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.crud.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        // dd($brand);
        return view('admin.crud.brands.edit', compact('brand'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $data['isTop'] = $request->has('isTop') ? 1 : 0;
            $brand->update($data);
            $brand->updateFile();

            return redirect()->route('brands.index', compact('brand'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            $brand->deleteFile();
            return redirect()->route('brands.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    public function sotrable(Request $request)
    {
       
        if (is_array($request->ids)) {
            //            $page = (int)($request->page);
            foreach ($request->ids as $sortOrder => $id) {
                $brand = Brand::find($id);
                $brand->sort = $sortOrder; //+ ($page * config('default_pagination'));
                $brand->save();
            }
            
            return ['success' => true, 'message' => __('messages.saved_success')];
        }
        return ['success' => false, 'message' => __('messages.saved_success')];
    }

    public function toggleIsTop($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->isTop = !$brand->isTop;
        $brand->save();
    
        return response()->json([
            'success' => true,
            'newValue' => $brand->isTop,
            'message' => 'تم التحديث بنجاح' 
        ], 200);
    }
    
}