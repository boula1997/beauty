<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\home\ProductResource as HomeProductResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\RecommendationResource;
use App\Models\Faq;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $faq;
    private $offer;
    private $category;
    private $brand;
    private $banner;
    private $product;
    public function __construct(Faq $faq,Offer $offer,Category $category,Brand $brand,Banner $banner,Product $product)
    {
        $this->faq = $faq;
        $this->offer = $offer;
        $this->category = $category;
        $this->brand = $brand;
        $this->banner = $banner;
        $this->product = $product;
    }

    public function index()
    {
        try {
            $data['about_section']= new PageResource(page('about'));
            
            $data['categories'] = CategoryResource::collection($this->category->latest()->paginate(10));
            
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function policy()
    {
        try {
         
            $data['policy_section'] = new PageResource(page('policy'));
            
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }


}