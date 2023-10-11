@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="card" style="width: 18rem;">
                <img src="{{ $project->img  }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title}}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p>{{ $project->deta}}</p>
                    <a href="#" class="btn btn-primary">{{ $project->programming_languages}}</a>
                </div>
            </div>
            {{-- <h1>{{ $project->title}}</h1>

            <img src="{{ $project->img  }}" alt="">
            <p>{{ $project->description }}</p>
            <p>{{ $project->deta }}</p>
            <p>{{ $project->programming_languages}}</p> --}}
        </div>
    </div>

@endsection