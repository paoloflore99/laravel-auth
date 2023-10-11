@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>create</h1>

        <form action="{{ route('admin.projects.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input id="title" name="title" type="text" class="form-control">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input id="img" name="img" type="text" class="form-control">
                @error('img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input id="description" name="description" type="text" class="form-control">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dete" class="form-label">Date</label>
                <input id="dete" name="dete" type="date" class="form-control">
                @error('dete')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="programming_languages" class="form-label">Languages</label>
                <input id="programming_languages" name="programming_languages" class="form-control">
                @error('programming_languages')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn bg-primary">invio</button>
        </form>
    </div>
</div>
@endsection
