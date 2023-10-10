@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $project->title}}</h1>

            <img src="{{ $project->img  }}" alt="">
            <p>{{ $project->description }}</p>
            <p>{{ $project->deta }}</p>
            <p>{{ $project->programming_languages}}</p>
        </div>
    </div>

@endsection