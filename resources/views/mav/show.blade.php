@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(count($mav) > 0)
                        @foreach ($mav as $mav)
                             <b><h2>{{$mav->title}}</h2></b>
                                {!!$mav->body!!}   <hr>
                        @endforeach
                    @else
                        <p>No Mission and Vision found </p>
                    @endif      
                </div>
            </div>
            
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                        <font color="green"><h3><p>About Pamantasan:</p> </h3></font>
                            <ul>
                                <li><a href="/history">History</a></li>
                                <li><a href="/plp_hymn">PLP Hymn</a> </li>
                                <li><a href="/logo_and_symbol">Logo and Symbol</a> </li>
                                <li><a href="/acads">Academic Calendar</a> </li>
                                <li><a href="http://map.dev">Map</a></li>
                                <li><a href="/rules">Rules and Regulation</a> </li>
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