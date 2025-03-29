<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Mail\NewsletterMail;
use App\Mail\NewsletterUserMail;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Feature;
use Exception;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $newsletter;


    public function __construct(newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request)
    {
        try {
            $data = $request->all();
            $newsletter = $this->newsletter->create($data);
            // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewsletterMail($newsletter));
            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
