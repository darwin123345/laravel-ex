@extends('layouts.app')


@section('content')
@include('inc.slider')
<br>
 @include('inc.row')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <font color="green"><h3><p class="text-center">ANNOUNCEMENT</p> </h3></font>
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <table class="table">
                                    <tbody style="width:100%">
                                        <tr>
                                        <div class="col-sm-4">
                                            <td style="width:20%"><a href="/posts/{{$post->id}}"><img style="width:100% !important; height:150px !important; object-fit: cover !important;" src="/storage/cover_images/{{$post->cover_image}}"></td>
                                            </div>
                                        <div class="col-sm-5">
                                            <td style="width:80%"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3> </a>
                                            <small> Written on {{$post->created_at}} by {{$post->user->name}}</small></td>
                                         </div>
                                         </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            {{$posts->links()}}
                        @else
                            <p>No posts found</p>
                        @endif
                        <hr>
                </div> 
            </div>
        </div> 
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body"> 
               <font color="green"> <h4><p>Contents</p> </h4></font>
                    <ul >
                        <li><a href="mav">Mission and Vision</a></li>
                        <li><a href="history">History</a></li>
                        <li><a href="plp_hymn">PLP Hymn</a></li>
                        <li><a href="http://localhost/plp.edu.php/wordpress/logo-and-symbol/">Logo and Symbol</a></li>
                        <li><a href="acads">Academic Calendar</a></li>
                        <li><a href="">Map</a></li>
                        <li><a href="rules">Rules and Regulation</a></li>
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


