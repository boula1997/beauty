<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComplainRequest as RequestsComplainRequest;
use App\Http\Requests\ComplainRequest;
use App\Models\File as ModelsFile;
use App\Models\Complain;
use Exception;
use Illuminate\Support\Facades\File;

class ComplainController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $complain;

    function __construct(Complain $complain)
    {
        $this->middleware('permission:complain-list|complain-create|complain-edit|complain-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:complain-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:complain-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:complain-delete', ['only' => ['destroy']]);
        $this->complain = $complain;
    }

    public function index()
    {
        try {
            $complains = $this->complain->latest()->get();
            return view('admin.crud.complains.index', compact('complains'))
                ->with('i', (request()->input('complain', 1) - 1) * 5);
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
        return view('admin.crud.complains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComplainRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $complain = $this->complain->create($data);
            return redirect()->route('complains.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        return view('admin.crud.complains.show', compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        // dd($complain);
        return view('admin.crud.complains.edit', compact('complain'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(ComplainRequest $request, Complain $complain)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $complain->update($data);
            return redirect()->route('complains.index', compact('complain'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {

        try {
            $complain->delete();
            return redirect()->route('complains.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
