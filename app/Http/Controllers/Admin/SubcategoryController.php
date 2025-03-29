<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SubcategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class SubcategoryController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $subcategory;
    function __construct(Subcategory $subcategory)
    {
        $this->middleware('permission:subcategory-list|subcategory-create|subcategory-edit|subcategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:subcategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:subcategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        try {
            $subcategories = $this->subcategory->latest()->paginate(10);
            return view('admin.crud.subcategories.index', compact('subcategories'))
                ->with('i', (request()->input('subcategory', 1) - 1) * 5);
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
        return view('admin.crud.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $subcategory = $this->subcategory->create($data);
            $subcategory->uploadFile();
            return redirect()->route('subcategories.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('admin.crud.subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        // dd($subcategory);
        $categories=Category::get();
        return view('admin.crud.subcategories.edit', compact('subcategory','categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryRequest $request, Subcategory $subcategory)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $subcategory->update($data);
            $subcategory->updateFile();

            return redirect()->route('subcategories.index', compact('subcategory'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        try {
            $subcategory->delete();
            $subcategory->deleteFile();
            return redirect()->route('subcategories.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}