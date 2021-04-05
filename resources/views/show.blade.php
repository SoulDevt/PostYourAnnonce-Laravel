@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{ $posts->title }}</h1>
            <p class="lead">{{ $posts->description }}</p>
            <hr class="my-4">
            <p>Author: {{ $posts->author }}</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/" role="button">Retournez dans les annonces</a>
            </p>
        </div>
    </div>

@endsection
