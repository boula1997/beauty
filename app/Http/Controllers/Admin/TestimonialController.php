<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TestimonialRequest;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class TestimonialController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $testimonial;
    function __construct(Testimonial $testimonial)
    {
        $this->middleware('permission:testimonial-list|testimonial-create|testimonial-edit|testimonial-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:testimonial-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:testimonial-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:testimonial-delete', ['only' => ['destroy']]);
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        try {
            $testimonials = $this->testimonial->latest()->get();
            return view('admin.crud.testimonials.index', compact('testimonials'))
                ->with('i', (request()->input('testimonial', 1) - 1) * 5);
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
        return view('admin.crud.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $testimonial = $this->testimonial->create($data);
            $testimonial->uploadFile();
            return redirect()->route('testimonials.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.crud.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        // dd($testimonial);
        return view('admin.crud.testimonials.edit', compact('testimonial'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $testimonial->update($data);
            $testimonial->updateFile();

            return redirect()->route('testimonials.index', compact('testimonial'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        try {
            $testimonial->delete();
            $testimonial->deleteFile();
            return redirect()->route('testimonials.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
