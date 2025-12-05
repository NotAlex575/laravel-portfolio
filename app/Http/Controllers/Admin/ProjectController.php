<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use PhpParser\NodeVisitor\CommentAnnotatingVisitor;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();
        $newProject->nome = $data['nome'];
        $newProject->cliente = $data['cliente'];
        $newProject->periodo_inizio = $data['periodo_inizio'];
        $newProject->riassunto = $data['riassunto'];
        $newProject->save();
        if ($request->action === "save_add"){
            return redirect()->route("projects.create");
        }
        return redirect()->route("projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->nome = $data['nome'];
        $project->cliente = $data['cliente'];
        $project->periodo_inizio = $data['periodo_inizio'];
        $project->riassunto = $data['riassunto'];
        $project->update();

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
