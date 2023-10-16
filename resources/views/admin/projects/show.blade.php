@extends('layouts.app')

@section('content')

            
            <div class="container">
                <div class="row">
                    <h5 class="card-title">{{ $project->title}}</h5>
                    <img src="{{ $project->img  }}" class="card-img-top" alt="...">
                    <p class="card-text">{{ $project->description }}</p>
                    <p>{{ $project->deta}}</p>
                    <a href="https://laravel.com/docs/10.x/releases" >{{ $project->programming_languages}}</a>
                </div>
            </div>

@endsection