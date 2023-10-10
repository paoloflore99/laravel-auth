@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $project->title}}</h1>

            <img src="{{ $project->img  }}" alt="">
            <p>{{ $project->description }}</p>
        </div>
    </div>

@endsection