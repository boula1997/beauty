<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Http\Resources\PageResource;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function index()
    {
        try {
            $data['newss'] = NewsResource::collection($this->news->get());
            $data['footer_section'] = new PageResource(page('footer'));

            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['news'] = new NewsResource($this->news->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}