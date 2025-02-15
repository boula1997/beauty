<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProcessResource;
use App\Models\Process;
use Exception;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    private $process;
    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function index()
    {
        try {
            $data['processes'] = ProcessResource::collection($this->process->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['process'] = new ProcessResource($this->process->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
