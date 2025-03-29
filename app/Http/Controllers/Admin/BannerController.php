<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BannerRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Store;
use Exception;

class BannerController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $banner;
    function __construct(Banner $banner)
    {
        $this->middleware('permission:banner-list|banner-create|banner-edit|banner-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:banner-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:banner-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:banner-delete', ['only' => ['destroy']]);
        $this->banner = $banner;
    }

    public function index()
    {
        try {
            $banners = $this->banner->latest()->paginate(10);
            return view('admin.crud.banners.index', compact('banners'))
                ->with('i', (request()->input('banner', 1) - 1) * 5);
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
        $stores=Store::get();
        $categories=Category::get();
        return view('admin.crud.banners.create',compact('stores', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $banner = $this->banner->create($data);
            $banner->uploadFile();
            return redirect()->route('banners.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('admin.crud.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        // dd($banner);
        $stores=Store::get();
        $categories=Category::get();
        return view('admin.crud.banners.edit', compact('banner','stores', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $banner->update($data);
            $banner->updateFile();

            return redirect()->route('banners.index', compact('banner'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        try {
            $banner->delete();
            $banner->deleteFile();
            return redirect()->route('banners.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
