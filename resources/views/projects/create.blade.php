@extends('layout')
@section('content')
    <h1>Create a New Projects</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="title" placeholder="Project Title" required>
        <input type="text" class="form-control" name="description" placeholder="Project Description" required>
        <button type="submit" class="btn btn-primary">Create Project</button>
    </form>
    <div class="notification is-danger">
    @include ('errors.errors')
    </div>
@endsection