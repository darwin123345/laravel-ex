@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel heading"><center><h3>Create Academic Calendar</h3></center></div>
                <div class="panel-body">

                    {!! Form::open(['action' => 'AcadsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="col-md-12">
                        <div class="form-group">
                            {{Form::label('title', 'Academic Year')}}
                            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Academic Year'])}}
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('semester', 'Semester')}}
                            {{Form::text('semester', '', ['class' => 'form-control', 'placeholder' => 'Semester'])}}
                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('duration', 'Duration')}}
                            {{Form::text('duration', '', ['class' => 'form-control', 'placeholder' => 'Duration'])}}
                        </div>
                        </div>  
                        <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('date', 'Date')}}
                            {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'Date'])}}
                        </div>
                        <div class="pull-left">{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}</div><br>
                        </div>
                        <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                        </div>  
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection