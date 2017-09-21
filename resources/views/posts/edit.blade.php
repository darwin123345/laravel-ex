@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Edit Post</h1>
                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
                    <a href="/dashboard" class="btn btn-default">Back</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection