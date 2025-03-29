<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Address;
use App\Models\ProductVariation;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Slider;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $products;
    private $s;
    private $offers;
    private $addresses;
    private $sliders;
    private $categories;
    

    public function __construct(Product $products,Offer $offers,Address $addresses,Slider $sliders, Category $categories)
    {
        $this->products=$products;
        $this->offers=$offers;
        $this->addresses=$addresses;
        $this->sliders=$sliders;
        $this->categories=$categories;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $products=$this->products->latest()->paginate(6);
            $variations=ProductVariation::where('quantity','>',0)->latest()->paginate(6);
            $homeProducts=$this->products->latest()->get();
            $offers=$this->offers->latest()->get();
            $addresses=$this->addresses->latest()->get();
            $sliders=$this->sliders->latest()->get();
            $categories=$this->categories->latest()->get();
            

            return view('front.index', compact('products','variations','offers','addresses','sliders','categories','homeProducts'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
     public function showwishlist(){
        $offers =Offer::get();    
         return view('front.wishlist', compact('offers'));
     }
     public function showaddtocart(){
        $offers =Offer::get();    
         return view('front.cart', compact('offers'));
     }
     public function checkout(){
         return view('front.checkout');
     }
    
}
