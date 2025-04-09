<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\PageResource;

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

            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }


}