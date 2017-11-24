@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <hr>
    <center>
        <h1>{{$post->title}}</h1>
        <hr>
        <img class="img-thumbnail" style="width: 50%; height: 50%;" src="/storage/cover_images/{{$post->cover_image}}">
    </center>
    <hr>
    <div>
        <!-- Used double exclamation instead of double curly braces to parse the HTML from the ckeditor -->
        {!!$post->body!!}
    </div>
    <br>
    <div align="right">
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            <hr>
        @endif
    @endif
@endsection