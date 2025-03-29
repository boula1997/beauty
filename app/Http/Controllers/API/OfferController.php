<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Exception;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    private $offer;
    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }

    public function index()
    {
        try {
            $data['offers'] = OfferResource::collection($this->offer->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['offer'] = new OfferResource($this->offer->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
