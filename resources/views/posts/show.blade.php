@extends('layouts.app')
@section('content')
   <div class= "container">
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-body">
                    <h3><p class="text-center">{{$post->title}}</p></h3>
                    <center><img style="height:auto"class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}"></center>
                    <br><br>
                    
                    <p>{!!$post->body!!} </p>
                    
                    <p align="right">  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small></p>
                    <hr>
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user_id)
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        @endif
                    @endif
                    <a href="/" class="btn btn-info">Back</a> 
                    <hr>
                </div>
            </div>
        </div>
     </div>
    </div>
@endsection