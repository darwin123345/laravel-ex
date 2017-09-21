@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(count($history) > 0)
                        @foreach ($history as $history)
                        <h2><b>{{$history->title}}</b></h2><hr>
                           
                            {!!$history->body!!} 
                            <img style="width:100%" src="/storage/cover_images/{{$history->cover_image}}"> <hr>
                         @endforeach
                    @else
                    <p>No History found
                    @endif
                </div>
            </div>
            
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                        <font color="green"><h3><p>About Pamantasan:</p> </h3></font>
                            <ul>
                                <li><a href="/mav">Mission and Vision</a></li>
                                <li><a href="/plp_hymn">PLP Hymn</a> </li>
                                <li><a href="/logo_and_symbol">Logo and Symbol</a> </li>
                                <li><a href="/acads">Academic Calendar</a> </li>
                                <li><a href="/map">Map</a></li>
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