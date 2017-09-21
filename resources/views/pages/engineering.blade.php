@extends('layouts.app')

@section('content')
   <div class= "container">
     <h1><p class="text-center">{{$post->title}}</p></h1>
        <center><img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}"></center>
        <br><br>
        {!!$post->body!!}
        <hr>
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
    </div>
   
@endsection