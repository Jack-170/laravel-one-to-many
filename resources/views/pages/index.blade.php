@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <h1 class="text-danger fw-bolder">Projects:</h1>
    <div class="container">
        <ul>
            @foreach ($projects as $project)
                <li>
                    {{ $project->title }}
                    <p class="text-danger">{{ $project->type->name }}</p>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
