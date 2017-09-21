@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                    <font color="green"><center> <h2><p>College of Nursing</p> </h2></center></font> <hr>
                <div class="panel-body">
                    @if(count($mav) > 0)
                        @foreach ($mav as $mav)
                             <font color="green"><h2>{{$mav->title}}</h2></font>
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
                 <font color="green"><center> <h4><p>College of Nursing</p> </h4></center></font>
                    <ul >
                        <li><a href="/cons">Announcement</a></li>
                    </ul>  
                </div> 
            </div>
            <div class="panel panel-default">
             @include('inc.twitter')
            </div> 
        </div> 
    </div>
</div>    
@endsection