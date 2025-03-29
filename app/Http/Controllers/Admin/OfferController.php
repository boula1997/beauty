<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\OfferRequest;
use Illuminate\Support\Facades\File;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class OfferController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $offer;
    function __construct(Offer $offer)
    {
        $this->middleware('permission:offer-list|offer-create|offer-edit|offer-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:offer-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:offer-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:offer-delete', ['only' => ['destroy']]);
        $this->offer = $offer;
    }

    public function index()
    {
        try {
            $offers = $this->offer->latest()->get();
            return view('admin.crud.offers.index', compact('offers'))
                ->with('i', (request()->input('offer', 1) - 1) * 5);
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
        return view('admin.crud.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $offer = $this->offer->create($data);
            $offer->uploadFile();
            return redirect()->route('offers.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('admin.crud.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        // dd($offer);
        return view('admin.crud.offers.edit', compact('offer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $offer->update($data);
            $offer->updateFile();

            return redirect()->route('offers.index', compact('offer'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        try {
            $offer->delete();
            $offer->deleteFile();
            return redirect()->route('offers.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
