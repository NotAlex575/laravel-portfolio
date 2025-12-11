<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with("code")->get();
        return response()->json([
            "success" => true,
            "result" => $projects
        ]);
    }

    public function show(Project $project){
        $project->load("code", "technologies")->get();
        return response()->json([
            "success" => true,
            "result" => $project
        ]);
    }
}
