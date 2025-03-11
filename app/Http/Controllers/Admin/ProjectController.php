<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProjectRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $project;
    function __construct(Project $project)
    {
        $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
        $this->project = $project;
    }


    public function index()
    {
        try {
            $projects = $this->project->latest()->get();
            return view('admin.crud.projects.index', compact('projects'))
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
        return view('admin.crud.projects.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        try {
            $project=$this->project->create($request->except('image','profile_avatar_remove','images','plan'));
            if ($request->hasFile('plan')) {
                $planPath = $request->file('plan')->store('plans', 'public');
                $project->update(['plan' => $planPath]);
            }
            $project->uploadFile();
            $project->uploadFiles();
            return redirect()->route('projects.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $images = $project->images;
        return view('admin.crud.projects.show', compact('project','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //    dd($project->title);
                $categories=Category::get();
                $images = $project->images;
        return view('admin.crud.projects.edit', compact('project','categories','images'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        try {
            $data = $request->except('image','profile_avatar_remove','images','delimages','plan');
            $project->update($data);
            if ($request->hasFile('plan')) {
                // حذف الصورة القديمة لو كانت موجودة
                if ($project->plan) {
                    Storage::disk('public')->delete($project->plan);
                }
            
                // رفع الصورة الجديدة وتحديث السجل
                $planPath = $request->file('plan')->store('plans', 'public');
                $project->update(['plan' => $planPath]);
            }
            
            $project->updateFile();
            $project->updateFiles();
            return redirect()->route('projects.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();
            $project->deleteFiles();
            return redirect()->route('projects.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}