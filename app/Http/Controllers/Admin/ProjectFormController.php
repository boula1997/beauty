<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProjectFormRequest;
use App\Mail\ProjectFormAdminMail;
use App\Mail\ProjectFormMail;
use App\Models\ProjectForm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $projectForm;
    function __construct(ProjectForm $projectForm)
    {
        $this->middleware('permission:projectForm-list|projectForm-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:projectForm-delete', ['only' => ['destroy']]);
        $this->middleware('permission:projectForm-reply', ['only' => ['reply']]);
        $this->projectForm = $projectForm;
    }


    public function index()
    {
        try {
            $data = $this->projectForm->latest()->get();
            return view('admin.crud.projectForms.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectForm  $projectForm
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectForm $projectForm)
    {
        return view('admin.crud.projectForms.show', compact('projectForm'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectForm  $projectForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectForm $projectForm)
    {
        try {
            $projectForm->delete();
            return redirect()->route('projectForms.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply($id)
    {
        try {
            $projectForm=$this->projectForm->find($id);
            return view('admin.crud.projectForms.reply',compact('projectForm'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply($id,ProjectFormRequest $request)
    {
        try {
            $data = $request->all();
            $projectForm=$this->projectForm->find($id);
            return redirect()->route('projectForms.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
