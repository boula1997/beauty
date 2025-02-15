<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Counter;
use Exception;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;
    private $testimonial;
    private $team;
    private $process;
    private $counter;
    private $portfolio;

    public function __construct(Service $service, Testimonial $testimonial, Team $team, Process $process, Counter $counter, Gallery $portfolio)
    {
        $this->service = $service;
        $this->testimonial = $testimonial;
        $this->team = $team;
        $this->process = $process;
        $this->counter = $counter;
        $this->portfolio = $portfolio;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $counters = $this->counter->get();
            return view('front.about', compact( 'counters'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
