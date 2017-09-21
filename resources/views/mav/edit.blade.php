@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Edit Mission and Vision</h1>
                {!! Form::open(['action' => ['MavController@update', $mav->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', $mav->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $mav->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    {{Form::hidden('_method','PUT')}}

                    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                    <a href="/mavsdashboard" class="btn btn-default">Back</a>
                {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection