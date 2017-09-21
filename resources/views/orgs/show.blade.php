@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                <font color="green"><center><h3>Student Organization</h3></center> <hr></font>
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
                                        <hr>
                                    </div>
                                </div>
                         
                        @endforeach

                            @else  
                           <p>No Studend Organization Found</p>                            
                        @endif
                            
                
            </div>
        </div>
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                       <font color="green"> <h3><p>About Pamantasan:</p> </h3></font>       
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