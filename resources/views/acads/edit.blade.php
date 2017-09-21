@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Edit Academic Calendar</h1>
                {!! Form::open(['action' => ['AcadsController@update', $acad->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Academic Calendar')}}
                    {{Form::text('title', $acad->title, ['class' => 'form-control', 'placeholder' => 'Academic Calendar'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $acad->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                <a href="/acadsDashboard" class="btn btn-info">Back</a>
                {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection