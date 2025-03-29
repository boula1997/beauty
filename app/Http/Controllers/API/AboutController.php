<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BenefitResource;
use App\Http\Resources\CounterResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\FaqResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Benefit;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Khsing\World\World;


class AboutController extends Controller
{
    private $slider;
    private $counter;
    private $country;

    public function __construct(Partner $partner,Slider $slider,Counter $counter,Country $country)
    {
        $this->counter = $counter;
        $this->slider = $slider;
        $this->country = $country;

    }
    public function index()
    {
        try {
            // $china = Country::getByCode('cn');
            // $china->has_division; // true, otherwise is false
            // $regsions = $china->children();Lebanon
            // foreach(World::Countries() as $key=>$value)
            // if ($value->name=='Lebanon')
            // dd($key);
            // $china->setLocale('zh-cn');
            // dd(World::Countries()[76]->children());
            // new CountryResource('Egypt');
            // $this->country->get()
        
                // dd($this->country->title->get());
                // $data['countries']= new CountryResource($this->country->get()[10]);
            
            $data['about-section'] = new PageResource(page('about'));
            $data['vision-section'] = new PageResource(page('vision'));
            $data['mission-section'] = new PageResource(page('mission'));

            $data['counters'] = CounterResource::collection($this->counter->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }


}
