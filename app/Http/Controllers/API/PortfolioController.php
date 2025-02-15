<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PortfolioResource;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $portfolio;
    public function __construct(Gallery $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function index()
    {
        try {
            $data['portfolios'] = PortfolioResource::collection($this->portfolio->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['portfolio'] = new PortfolioResource($this->portfolio->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
