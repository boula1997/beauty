<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\NewsletterRequest;
use App\Mail\NewsletterAdminMail;
use App\Mail\NewsletterMail;
use App\Models\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $newsletter;
    function __construct(Newsletter $newsletter)
    {
        $this->middleware('permission:newsletter-list|newsletter-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:newsletter-delete', ['only' => ['destroy']]);
        $this->middleware('permission:newsletter-reply', ['only' => ['reply']]);
        $this->newsletter = $newsletter;
    }


    public function index()
    {
        try {
            $data = $this->newsletter->latest()->get();
            return view('admin.crud.newsletters.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return view('admin.crud.newsletters.show', compact('newsletter'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        try {
            $newsletter->delete();
            return redirect()->route('newsletters.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply()
    {
        try {
            return view('admin.crud.newsletters.reply');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply(NewsletterRequest $request)
    {
        try {
            $data = $request->all();
            // Mail::to()->send(new NewsletterMail($data));
            return redirect()->route('newsletters.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
