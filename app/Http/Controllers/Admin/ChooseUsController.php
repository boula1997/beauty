<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChooseUsRequest;
use Illuminate\Support\Facades\File;
use App\Models\ChooseUs;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Store;
use Exception;

class ChooseUsController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $chooseUs;
    function __construct(ChooseUs $chooseUs)
    {
        $this->middleware('permission:chooseUs-list|chooseUs-create|chooseUs-edit|chooseUs-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:chooseUs-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:chooseUs-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:chooseUs-delete', ['only' => ['destroy']]);
        $this->chooseUs = $chooseUs;
    }

    public function index()
    {
        try {
            $chooseUss = $this->chooseUs->latest()->paginate(10);
            return view('admin.crud.chooseUss.index', compact('chooseUss'))
                ->with('i', (request()->input('chooseUs', 1) - 1) * 5);
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
        return view('admin.crud.chooseUss.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChooseUsRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $chooseUs = $this->chooseUs->create($data);
            $chooseUs->uploadFile();
            return redirect()->route('chooseUss.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChooseUs  $chooseUs
     * @return \Illuminate\Http\Response
     */
    public function show(ChooseUs $chooseUs)
    {
        return view('admin.crud.chooseUss.show', compact('chooseUs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChooseUs  $chooseUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ChooseUs $chooseUs)
    {
        // dd($chooseUs);
        $stores=Store::get();
        return view('admin.crud.chooseUss.edit', compact('chooseUs','stores'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $chooseUs
     * @return \Illuminate\Http\Response
     */
    public function update(ChooseUsRequest $request, ChooseUs $chooseUs)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $chooseUs->update($data);
            $chooseUs->updateFile();

            return redirect()->route('chooseUss.index', compact('chooseUs'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChooseUs  $chooseUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChooseUs $chooseUs)
    {
        try {
            $chooseUs->delete();
            $chooseUs->deleteFile();
            return redirect()->route('chooseUss.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}