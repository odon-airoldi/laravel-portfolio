<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('project-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newProject = new Project();
        $newProject->name = $data['name'];
        $newProject->client = $data['client'];
        $newProject->description = $data['description'];
        $newProject->year = $data['year'];
        $newProject->save();

        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // @dd($project->type);

        return view('project', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project-edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data['name'];
        $project->client = $data['client'];
        $project->description = $data['description'];
        $project->year = $data['year'];
        $project->save();

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
