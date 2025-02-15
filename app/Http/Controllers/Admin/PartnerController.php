<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PartnerRequest;
use Illuminate\Support\Facades\File;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class PartnerController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $partner;
    function __construct(Partner $partner)
    {
        $this->middleware('permission:partner-list|partner-create|partner-edit|partner-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:partner-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:partner-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:partner-delete', ['only' => ['destroy']]);
        $this->partner = $partner;
    }

    public function index()
    {
        try {
            $partners = $this->partner->latest()->get();
            return view('admin.crud.partners.index', compact('partners'))
                ->with('i', (request()->input('partner', 1) - 1) * 5);
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
        return view('admin.crud.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $partner = $this->partner->create($data);
            $partner->uploadFile();
            return redirect()->route('partners.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.crud.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        // dd($partner);
        return view('admin.crud.partners.edit', compact('partner'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, Partner $partner)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $partner->update($data);
            $partner->updateFile();
            return redirect()->route('partners.index', compact('partner'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        try {
            $partner->delete();
            $partner->deleteFile();

            return redirect()->route('partners.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
