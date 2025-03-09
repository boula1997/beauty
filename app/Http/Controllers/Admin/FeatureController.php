<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FeatureRequest;
use Exception;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $feature;
    function __construct(Feature $feature)
    {
        $this->middleware('permission:feature-list|feature-create|feature-edit|feature-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:feature-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:feature-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:feature-delete', ['only' => ['destroy']]);
        $this->feature = $feature;
    }


    public function index()
    {
        try {
            $features = $this->feature->latest()->get();
            return view('admin.crud.features.index', compact('features'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('admin.crud.features.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureRequest $request)
    {
        try {
            $feature=$this->feature->create($request->except('image','profile_avatar_remove','images'));
            $feature->uploadFile();
            $feature->uploadFiles();
            return redirect()->route('features.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        $images = $feature->images;
        return view('admin.crud.features.show', compact('feature','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //    dd($feature->title);
                $categories=Category::get();
                $images = $feature->images;
        return view('admin.crud.features.edit', compact('feature','categories','images'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureRequest $request, Feature $feature)
    {
        try {
            $data = $request->except('image','profile_avatar_remove','images','delimages');
            $feature->update($data);
            $feature->updateFile();
            $feature->updateFiles();
            return redirect()->route('features.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        try {
            $feature->delete();
            $feature->deleteFiles();
            return redirect()->route('features.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
