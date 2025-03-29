<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SliderRequest;
use Illuminate\Support\Facades\File;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Store;
use Exception;

class SliderController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $slider;
    function __construct(Slider $slider)
    {
        $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:slider-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:slider-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
        $this->slider = $slider;
    }

    public function index()
    {
        try {
            $sliders = $this->slider->latest()->paginate(10);
            return view('admin.crud.sliders.index', compact('sliders'))
                ->with('i', (request()->input('slider', 1) - 1) * 5);
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
        return view('admin.crud.sliders.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $slider = $this->slider->create($data);
            $slider->uploadFile();
            return redirect()->route('sliders.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.crud.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        // dd($slider);
        $stores=Store::get();
        return view('admin.crud.sliders.edit', compact('slider','stores'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $slider->update($data);
            $slider->updateFile();

            return redirect()->route('sliders.index', compact('slider'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();
            $slider->deleteFile();
            return redirect()->route('sliders.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
