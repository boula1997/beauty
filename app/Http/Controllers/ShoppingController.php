<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Advantage;
use App\Models\Advertisement;
use App\Models\Offer;
use Exception;

class ShoppingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $testimonial;
    private $team;
    private $counter;
    private $teams;
    private $partners;
    private $slider;
    private $products;
    private $advantages;
    private $advertisements;
    private $offers;
    

    public function __construct( Testimonial $testimonial, Team $team, Counter $counter,Team $teams,Partner $partners,Slider $slider,Product $products,Advantage $advantages,Advertisement $advertisements,Offer $offers)
    {
        $this->testimonial = $testimonial;
        $this->team = $team;
        $this->counter = $counter;
        $this->teams=$teams;
        $this->partners=$partners;
        $this->slider=$slider;
        $this->products=$products;
        $this->advantages=$advantages;
        $this->advertisements=$advertisements;
        $this->offers=$offers;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $products=$this->products->get();
            $testimonials = $this->testimonial->get();
            $teams = $this->team->get();
            $counters = $this->counter->get();
            $teams=$this->teams->get();
            $partners=$this->partners->get();
            $sliders=$this->slider->get();
            $advantages=$this->advantages->get();
            $advertisements=$this->advertisements->where('status',1)->get();

            $offers=$this->offers->get();
            

            return view('front.shopping_now', compact('testimonials', 'teams', 'counters','teams','partners','sliders','products','advantages','advertisements','offers'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function showteam(){
       $teams =Team::get();    
        return view('front.team', compact('teams'));
    }
    public function showtestimonial(){
        $testimonials =Testimonial::get();    
         return view('front.testimonial', compact('testimonials'));
     }
    
}
