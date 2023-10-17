@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>edit</h1>


        <form action="{{ route('admin.projects.update' , ['project' => $project->id])}}" method="POST">
            @csrf
            @method("patch")

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input id="title" name="title" type="text" class="form-control" value="{{ $project->title}}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <img src="{{ $project->img}}" alt="">
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input id="img" name="img" type="text" class="form-control"  value="{{ $project->img}}">
                @error('img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input id="description" name="description" type="text" class="form-control"  value="{{ $project->description}}">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dete" class="form-label">Date</label>
                <input id="dete" name="dete" type="date" class="form-control"  value="{{ $project->dete}}">
                @error('dete')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="programming_languages" class="form-label">Languages</label>
                <input id="programming_languages" name="programming_languages" class="form-control"  value="{{ $project->programming_languages}}">
                @error('programming_languages')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- <a href="{{route('admin.projects.edit') }}">edit</a> --}}
            <a type="" class="btn btn-primary"  href="{{route('admin.projects.index') }}">salva</a>
        </form>
    </div>
</div>
@endsection