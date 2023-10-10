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
                            <td>{{ $project->img }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->dete }}</td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </div>

@endsection