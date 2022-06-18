@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>
        <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
    </p>
    <p>
        <a href="{{ route('projects.index') }}">Back</a>
    </p>
    <p>
        <a href="{{ route('projects.destroy', $project->id) }}">Delete</a>
    </p>
@endsection