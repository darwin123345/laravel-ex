@extends('layouts.app')

@section('content')
<div class="container">
     <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/posts/create" class="btn btn-primary">Add New Post</a>
            <center><h3>Your Posts</h3></center>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <table class="table">
                        <tbody style="width:100%">
                            <tr>        
                                <td stlye="width 20%"><a href="/posts/{{$post->id}}"><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></td>
                                <td style="width:80%"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3> </a><small> Written on {{$post->created_at}} by {{$post->user->name}}</small> <br>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default" >Edit</a>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            @else
                <p>No posts found</p>
            @endif
        </div>
    </div>
</div>
@endsection