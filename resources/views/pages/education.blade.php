@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(count($rules) > 0)
                        @foreach ($rules as $rule)
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{$rule->title}}
                                        <i class="more-less glyphicon glyphicon-plus pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                        @endforeach
                    @else
                    <p>No rules and regulation found </p>
                    @endif
                    
                
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                         @if(count($rules) > 0)
                            @foreach ($rules as $rule)
                                 {!!$rule->body!!}

                            @endforeach
                        @else
                        <p>No rules and regulation found </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $rule->user_id)
                        <a href="/rules/create" class="btn btn-default btn-md">Add Rules and Regulation</a>
                        <a href="/rules/{{$rule->id}}/edit" class="btn btn-default btn-md pull-right">Edit</a>
                        <br>
                    @endif
                @endif
            
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h3><p>About Pamantasan:</p> </h3>
                            <ul>
                                <li><a href="/missionvision">Mission and Vision</a></li>
                                <li><a href="/plp_hymn">PLP Hymn</a> </li>
                                <li><a href="/logo_and_symbol">Logo and Symbol</a> </li>
                                <li><a href="/academic_calendar">Academic Calendar</a> </li>
                                <li><a href="/map">Map</a></li>
                                <li><a href="/rules_and_regulation">Rules and Regulation</a> </li>
                            </ul>
                        <br>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection