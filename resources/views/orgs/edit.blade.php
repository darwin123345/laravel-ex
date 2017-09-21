@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Edit Student Organization</h1>
                {!! Form::open(['action' => ['OrgsController@update', $org->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', $org->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $org->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>

                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                    <a href="/orgsdashboard" class="btn btn-default">Back</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection