<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ColorResource;
use App\Models\Color;
use Exception;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    private $color;
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function index()
    {
        try {
            $data['colors'] = ColorResource::collection($this->color->latest()->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['color'] = new ColorResource($this->color->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
