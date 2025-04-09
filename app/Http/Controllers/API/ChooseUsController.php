<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChooseUsResource;
use App\Models\ChooseUs;
use Exception;
use Illuminate\Http\Request;

class ChooseUsController extends Controller
{
    private $chooseUs;
    public function __construct(ChooseUs $chooseUs)
    {
        $this->chooseUs = $chooseUs;
    }

    public function index()
    {
        try {
            $data['chooseUss'] = ChooseUsResource::collection($this->chooseUs->latest()->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['chooseUs'] = new ChooseUsResource($this->chooseUs->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}