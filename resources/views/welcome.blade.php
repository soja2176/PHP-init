@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>{{ Auth::check() ? 'Welcome ' . Auth::user()->name : 'Welcome guest' }}</h1>
<ul>

    @foreach ($tasks as $task)
        <li>{{$task}}</li>
    @endforeach;

</ul>
@endsection



