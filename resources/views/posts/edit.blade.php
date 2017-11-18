@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('title', 'TITLE')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'BODY')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter content'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection