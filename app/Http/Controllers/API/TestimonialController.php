<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonial;
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        try {
            $data['testimonials'] = TestimonialResource::collection($this->testimonial->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['testimonial'] = new TestimonialResource($this->testimonial->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
