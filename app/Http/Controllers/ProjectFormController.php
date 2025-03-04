<?php

namespace App\Http\Controllers;

use App\Http\Requests\API\ProjectFormRequest;
use App\Mail\ProjectFormMail;
use App\Mail\ProjectFormUserMail;
use App\Models\ProjectForm;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Counter;
use Exception;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class ProjectFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $projectForm;


    public function __construct(projectForm $projectForm)
    {
        $this->projectForm = $projectForm;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            return view('front.projectForm');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectFormRequest $request)
    {
        try {
            $data = $request->all();
            $projectForm = $this->projectForm->create($data);
            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
