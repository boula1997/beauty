<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $project;
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        try {
            $data['projects'] = ProjectResource::collection($this->project->get());
            $data['footer_section'] = new PageResource(page('footer-section'));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['project'] = new ProjectResource($this->project->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}