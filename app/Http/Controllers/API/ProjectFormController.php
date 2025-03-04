<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ProjectFormRequest;
use App\Models\ProjectForm;
use Exception;
use Illuminate\Http\Request;

class ProjectFormController extends Controller
{
    public function store(ProjectFormRequest $request)
    {

        try {
            $data = ProjectForm::create($request->all());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
