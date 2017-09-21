@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/orgs/create" class="btn btn-primary">Add New Organization</a>
            <h3><center>Student Organization</center></h3> <hr>
            @if(count($orgs) > 0)
                @foreach ($orgs as $org)
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$org->title}}" aria-expanded="true" aria-controls="{{$org->title}}">
                                {{$org->title}}
                        <i class="more-less glyphicon glyphicon-plus pull-right"></i><hr>
                        </a>
                        </h4> 
                    </div> 
                    <div id="{{$org->title}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">  
                            {!!$org->body!!}
                            <a href="/orgs/{{$org->id}}/edit" class="btn btn-default" >Edit</a>
                            {!!Form::open(['action' => ['OrgsController@destroy', $org->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                            <hr>
                        </div>
                    </div>
                        
                @endforeach
                    @else  
                    <p>No Student Organization Found</p>                            
            @endif  
        </div>
    </div>
</div>
@endsection
