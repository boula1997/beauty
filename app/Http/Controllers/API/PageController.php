<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $page;
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function index()
    {
        try {
            $data['pages'] = PageResource::collection($this->page->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['page'] = new PageResource($this->page->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
