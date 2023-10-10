@extends('layouts.app')

@section('content')
    

    <div class="container">
        <div class="row">
            <h1>create</h1>

            <form action="{{ route('admin.projects.store')}}" method="Post">
            @csrf
                <div class="mb-3">
                    <label for="" class="form-lable">title</label>
                    <input name="title" type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-lable">img</label>
                    <input name="img" type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-lable">description</label>
                    <input name="description" type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label  class="form-lable">date</label>
                    <input name="date" type="date" class="form-control">
                </div>


                <button type="button" class="btn bg-primary">invio</button>
            </form>
        </div>
    </div>

@endsection