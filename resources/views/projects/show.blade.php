@extends('layouts.app')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>
        <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
        <a href="{{ route('projects.destroy', $project->id) }}">Delete</a>
    </p>
    @if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
            <div>
                <form method="POST" action="/task/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
    @endif

    {{-- Add a new task form --}}
    <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>
            <div class="control">
                <input class="input" type="text" name="description" placeholder="New Task" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link">Add Task</button>
            </div>
        </div>
        @include ('errors.errors')
    <p>
        <a href="{{ route('projects.index') }}">Back</a>
    </p>
    
@endsection