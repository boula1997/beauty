<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChooseUsResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\TeamResource;
use App\Models\ChooseUs;
use App\Models\Team;
use Exception;



class AboutController extends Controller
{

    public function __construct()
    {


    }
    public function index()
    {
        try {

            $data['about-section'] = new PageResource(page('about'));
            $data['chooseUss'] = ChooseUsResource::collection(ChooseUs::latest()->get());
            $data['teams'] = TeamResource::collection(Team::latest()->get());

            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }


}