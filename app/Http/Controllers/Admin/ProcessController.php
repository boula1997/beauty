<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProcessRequest;
use Illuminate\Support\Facades\File;
use App\Models\Process;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class ProcessController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $process;
    function __construct(Process $process)
    {
        $this->middleware('permission:process-list|process-create|process-edit|process-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:process-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:process-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:process-delete', ['only' => ['destroy']]);
        $this->process = $process;
    }

    public function index()
    {
        try {
            $processes = $this->process->latest()->get();
            return view('admin.crud.processes.index', compact('processes'))
                ->with('i', (request()->input('process', 1) - 1) * 5);
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
        return view('admin.crud.processes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $process = $this->process->create($data);
            $process->uploadFile();
            return redirect()->route('processes.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        return view('admin.crud.processes.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        // dd($process);
        return view('admin.crud.processes.edit', compact('process'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $process
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessRequest $request, Process $process)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $process->update($data);
            $process->updateFile();
            return redirect()->route('processes.index', compact('process'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        try {
            $process->delete();
            $process->deleteFile();
            return redirect()->route('processes.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
