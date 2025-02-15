<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\NewsletterRequest;
use App\Models\Newsletter;
use Exception;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {

        try {
            $data = Newsletter::create($request->all());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
