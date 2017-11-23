@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'TITLE')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'BODY')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter content'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection