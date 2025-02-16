<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BenefitResource;
use App\Http\Resources\CareerResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ChooseusResource;
use App\Http\Resources\CounterResource;
use App\Http\Resources\FaqResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\LocationResource;
use App\Http\Resources\MealResource;
use App\Http\Resources\NewsResource;
use App\Http\Resources\OfferResource;
use App\Http\Resources\OutsideCategoryResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\RestaurantResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Meal;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Restaurant;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Benefit;
use App\Models\Chooseus;
use App\Models\Project;
use App\Models\Career;
use App\Models\Offer;
use App\Models\OutsideCategory;
use App\Models\Location;
use App\Models\News;
use App\Models\Story;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $project;
    private $partner;
    private $news;

    public function __construct(Project $project,Partner $partner,News $news)
    {
        $this->project = $project;
        $this->partner = $partner;
        $this->news = $news;
    }

    public function index()
    {
        try {
            
            $data['blog_section'] = new PageResource(page('blog'));
            $data['about_section'] = new PageResource(page('aboutus-home'));
            $data['projects'] = ProjectResource::collection($this->project->latest()->paginate(10));
            $data['partners'] = PartnerResource::collection($this->partner->latest()->paginate(10));
            $data['news'] = NewsResource::collection($this->news->latest()->paginate(10));
            $data['footer_section'] = new PageResource(page('footer-section'));
            return response()->json($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }



}