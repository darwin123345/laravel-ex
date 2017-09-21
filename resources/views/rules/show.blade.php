@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                <center><h2><b>Rules and Regulation</b><h2></center> <hr>
                    @if(count($rules) > 0)
                        @foreach ($rules as $rule)
                          <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$rule->title}}" aria-expanded="true" aria-controls="{{$rule->title}}">
                                        {{$rule->title}}
                                <i class="more-less glyphicon glyphicon-plus pull-right"></i><hr>
                                </a>
                                </h4> 
                            </div> 
                            <div id="{{$rule->title}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                       <p> {!!$rule->body!!} </p>
                                        <hr>
                                   
                                </div>
                         
                        @endforeach

                            @else  
                           <p>No Rules and Regulation</p>                            
                        @endif
                            
                
            </div>
        </div>
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                        <font color="green"><h3><p>About Pamantasan:</p> </h3><font>
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
            <div class="panel panel-default">
             @include('inc.twitter')
            </div> 
        </div>
    </div>
</div>
@endsection