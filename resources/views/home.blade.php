@extends('layouts.layout')

@section('title', 'benvenuti | Home')

@section('content')

    <h1>Hello World</h1>

    <h1>Sono la pagina home</h1>

    <div class="row row-cols-4 gap-4">
        @foreach ($movie as $element)
            <div class="card col" style="width: 18rem;">

                    <img src="..." class="card-img-top" alt="{{$element['title']}}">

                    <div class="card-body">

                        <h5 class="card-title">Title: {{$element['title']}}</h5>

                        <p class="card-text">Nationality: {{$element['nationality']}}</p>

                        <p class="card-text">Date: {{$element['date']}}</p>

                        <p class="card-text">Vote: {{$element['vote']}}</p>

                        <a href="#" class="btn btn-primary">Go somewhere</a>

                    </div>
                </div>
        @endforeach
    </div>



@endsection
