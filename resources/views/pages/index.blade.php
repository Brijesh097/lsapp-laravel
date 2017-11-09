@extends('layouts.app')

@section('content')
    <div class="jumbotron">
      <div class="container text-center">
        <h1>{{$title}}</h1>
        <p>This is a simple web application created using laravel framework ...</p>
        <br>
        <p>
            <a class="btn btn-primary btn-md" href="/login" role="button">Login</a>
            &nbsp;
            <a class="btn btn-success btn-md" href="/register" role="button">Register</a>
        </p>
      </div>
    </div>
@endsection
