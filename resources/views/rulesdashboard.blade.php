@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/rules/create" class="btn btn-primary">Add New Rules</a>
            <h3><center>Rules and Regulation</center></h3> <hr>
            @if(count($rules) > 0)
                @foreach ($rules as $rule)
                <table class="table">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$rule->title}}" aria-expanded="true" aria-controls="{{$rule->title}}">
                                {{$rule->title}}
                            <i class="more-less glyphicon glyphicon-plus pull-right"></i><hr>
                        </a>
                        </h4> 
                    </div> 
                    <div id="{{$rule->title}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">  
                            {!!$rule->body!!}
                                <a href="/rules/{{$rule->id}}/edit" class="btn btn-default" >Edit</a>
                                {!!Form::open(['action' => ['RulesController@destroy', $rule->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            <hr>
                        </div>
                        </div>
                    
                @endforeach
                @else  
                <p>No Rules and Regulation</p>                            
            @endif
        </div>
    </div>
</div>
@endsection
