<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ColorRequest;
use Illuminate\Support\Facades\File;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Store;
use Exception;

class ColorController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $color;
    function __construct(Color $color)
    {
        $this->middleware('permission:color-list|color-create|color-edit|color-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:color-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:color-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:color-delete', ['only' => ['destroy']]);
        $this->color = $color;
    }

    public function index()
    {
        try {
            $colors = $this->color->latest()->paginate(10);
            return view('admin.crud.colors.index', compact('colors'))
                ->with('i', (request()->input('color', 1) - 1) * 5);
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
        return view('admin.crud.colors.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $color = $this->color->create($data);
            $color->uploadFile();
            return redirect()->route('colors.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        return view('admin.crud.colors.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        // dd($color);
        $stores=Store::get();
        return view('admin.crud.colors.edit', compact('color','stores'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, Color $color)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $color->update($data);
            $color->updateFile();

            return redirect()->route('colors.index', compact('color'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        try {
            $color->delete();
            $color->deleteFile();
            return redirect()->route('colors.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}