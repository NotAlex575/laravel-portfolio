<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Project;
use App\Models\Technology;
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
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $codes = Code::all();

        $technologies = Technology::all();

        return view("admin.projects.create", compact("codes", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();
        $newProject->nome = $data['nome'];
        $newProject->code_id = $data['code_id'];
        $newProject->cliente = $data['cliente'];
        $newProject->periodo_inizio = $data['periodo_inizio'];
        $newProject->riassunto = $data['riassunto'];
        $newProject->save();

        // Dopo aver salvato il post, controllo se ho ricevuto dei tag
        if ($request->has('technologies')) {
            $newProject->technologies()->attach($data['technologies']);
        }

        if ($request->action === "save_add"){
            return redirect()->route("admin.projects.create");
        }
        return redirect()->route("admin.projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $codes = Code::all();
        $technologies = Technology::all();

        return view("admin.projects.edit", compact("project", "codes", "technologies"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->nome = $data['nome'];
        $project->code_id = $data['code_id'];
        $project->cliente = $data['cliente'];
        $project->periodo_inizio = $data['periodo_inizio'];
        $project->riassunto = $data['riassunto'];
        $project->update();

        // Dopo aver salvato il post, controllo se ho ricevuto dei tag
        if ($request->has('technologies')) {
            $project->technologies()->sync($data['technologies']);
        } else {
            $project->technologies()->detach();
        }

        return redirect()->route("admin.projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Rimuove tutte le relazioni nella pivot
        $project->technologies()->detach();

        // Poi cancella il progetto
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
