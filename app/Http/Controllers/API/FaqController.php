<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use App\Models\Faq;
use Exception;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $faq;
    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    public function index()
    {
        try {
            $data['faqs'] = FaqResource::collection($this->faq->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['faq'] = new FaqResource($this->faq->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
