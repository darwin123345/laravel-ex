@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                <font color="green"><center><h2>Scholarship Programs<h2></center> <hr></font>
                    @if(count($scholars) > 0)
                        @foreach ($scholars as $scholar)
                               <center> <h3>{{$scholar->title}}</h3> </center>
                                {!!$scholar->body!!}   <hr>
                        @endforeach
                    @else
                        <p>No Scholarship Program found </p>
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
        </div>
    </div>
</div>
@endsection