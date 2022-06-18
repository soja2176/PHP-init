<?php

namespace App\Http\Controllers;

use \App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show( Project $project )
    {
        return view('projects.show', compact('project'));
    }


    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project)
    {
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }


    public function store()
    {
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect('/projects');
    }
    
}
