<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CounterResource;
use App\Models\Counter;
use Exception;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    private $counter;
    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function index()
    {
        try {
            $data['counters'] = CounterResource::collection($this->counter->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['counter'] = new CounterResource($this->counter->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
