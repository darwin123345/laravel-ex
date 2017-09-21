@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row" >
        <div class="col-md-9">
            <div class="panel panel-default" >
            <font color="green"> <center><h2><p>College of Nursing</p> </h2></center></font><hr>
                <div class="panel-body" >
                     @include('inc.conslider')
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
            <div class="panel panel-default" >
                <div class="panel-body" > 
                     <font color="green"> <center><h4><p>College of Nursing</p> </h4></center></font>
                    <ul >
                        <li><a href="/conMav">Mission and Vision</a></li>
                    </ul>  
                </div> 
            </div>
            <div class="panel panel-default" >
             @include('inc.twitter')
            </div> 
        </div> 
    </div>
</div>  
@endsection