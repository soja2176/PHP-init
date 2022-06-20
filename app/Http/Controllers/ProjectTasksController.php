<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $project->addTask(
            request()->validate(['description' => 'required'])
        );
        
        return back();
       
    }
    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}