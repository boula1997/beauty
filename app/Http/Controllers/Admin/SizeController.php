<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SizeRequest;
use Illuminate\Support\Facades\File;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Store;
use Exception;

class SizeController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $size;
    function __construct(Size $size)
    {
        $this->middleware('permission:size-list|size-create|size-edit|size-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:size-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:size-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:size-delete', ['only' => ['destroy']]);
        $this->size = $size;
    }

    public function index()
    {
        try {
            $sizes = $this->size->latest()->paginate(10);
            return view('admin.crud.sizes.index', compact('sizes'))
                ->with('i', (request()->input('size', 1) - 1) * 5);
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
        return view('admin.crud.sizes.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $size = $this->size->create($data);
            $size->uploadFile();
            return redirect()->route('sizes.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return view('admin.crud.sizes.show', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        // dd($size);
        $stores=Store::get();
        return view('admin.crud.sizes.edit', compact('size','stores'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $size
     * @return \Illuminate\Http\Response
     */
    public function update(SizeRequest $request, Size $size)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $size->update($data);
            $size->updateFile();

            return redirect()->route('sizes.index', compact('size'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        try {
            $size->delete();
            $size->deleteFile();
            return redirect()->route('sizes.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}