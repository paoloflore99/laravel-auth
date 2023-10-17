@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <h1>index</h1>
            <table class="table">

                <thead>
                    <tr>
                        <td>titolo</td>
                        <td>imaggine</td>
                        <td>descrizione</td>
                        <td>data</td>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($projects as $project )
                        <tr>
                            <td>{{ $project->title }}</td>
                            @if ($project->img)
                                <td><img class="img-index" src="{{ $project->img }}" alt=""></td>
                            @else
                                <td><img class="img-index" src="https://cdn.calciomercato.com/images/2019-05/Whatsapp.senza.immagine.2019.1400x840.jpg" alt=""></td>
                            @endif
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->dete }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show' $projects->slug)}}"></a>
                                {{-- <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"></a> --}}
                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </div>


    {{-- 
            <div class="card" style="width: 18rem;">
                <img src="{{ $project->img  }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title}}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p>{{ $project->deta}}</p>
                    <a href="#" class="btn btn-primary">{{ $project->programming_languages}}</a>
                </div>
            </div> --}}
@endsection