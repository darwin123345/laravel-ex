@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
               <font color="green"> <center><h2>Academic Calendar<h2></center> <hr></font>
                    @if(count($acads) > 0)
                        @foreach ($acads as $acad)
                            <center> <h4>{{$acad->title}}</h4></center>
                                    {!!$acad->body!!}<hr>
                        @endforeach
                    @else
                        <p>No Academic Calendar Found </p>
                    @endif
                </div>
            </div>
            
        </div>    
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                       <font color="green"> <h3><p>About Pamantasan:</p> </h3> </font>
                            <ul>
                                <li><a href="/mav">Mission and Vision</a></li>
                                <li><a href="/history">History</a> </li>
                                <li><a href="/plp_hymn">PLP Hymn</a> </li>
                                <li><a href="/logo_and_symbol">Logo and Symbol</a> </li>
                                <li><a href="/">Map</a> </li>
                                <li><a href="/rules">Rules and Regulation</a> </li>
                            </ul>
                        <br>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection