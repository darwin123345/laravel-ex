@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Create Mission and Vision</h1><hr>
                {!! Form::open(['action' => 'MavController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
                    <a href="/mavdashboard" class="btn btn-default">Back</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection