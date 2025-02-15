<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Exception;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    private $partner;
    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        try {
            $data['partners'] = PartnerResource::collection($this->partner->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['partner'] = new PartnerResource($this->partner->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
