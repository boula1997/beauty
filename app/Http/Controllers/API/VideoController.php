<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use Exception;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    private $video;
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    public function index()
    {
        try {
            $data['videos'] = VideoResource::collection($this->video->get());
            $data['footer_section'] = new PageResource(page('footer-section'));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['video'] = new VideoResource($this->video->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}