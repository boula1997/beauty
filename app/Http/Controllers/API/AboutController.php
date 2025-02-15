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
use App\Models\Gallery;
use App\Models\Offer;
use App\Models\OutsideCategory;
use App\Models\Location;
use App\Models\News;
use App\Models\Story;
use Exception;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $counter;
    private $portfolio;
    private $project;

    public function __construct(Counter $counter, Gallery $portfolio, Project $project)
    {
        $this->counter = $counter;
        $this->portfolio = $portfolio;
        $this->project = $project;
    }

    public function index()
    {
        try {
            $data['about_section'] = new PageResource(page('about'));
            $data['projects'] = ProjectResource::collection($this->project->latest()->take(3)->get());
            $data['counters'] = CounterResource::collection($this->counter->latest()->paginate(10));
            $data['footer_section'] = new PageResource(page('footer'));
            return response()->json($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }



}