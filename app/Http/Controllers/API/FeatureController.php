<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use Exception;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    private $feature;
    public function __construct(Feature $feature)
    {
        $this->feature = $feature;
    }

    public function index()
    {
        try {
            $data['features'] = FeatureResource::collection($this->feature->get());
            $data['footer_section'] = new PageResource(page('footer-section'));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['feature'] = new FeatureResource($this->feature->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
