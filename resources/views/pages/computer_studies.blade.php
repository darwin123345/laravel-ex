@extends('layouts.app')

@section('content')
    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <table class="table">
                    <tbody style="width:100%">
                        <tr>
                            <td stlye="width 20%"><a href="/posts/{{$post->id}}"><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></td>
                            <td style="width:80%"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3> </a>
                            <small> Written on {{$post->created_at}} by {{$post->user->name}}</small></td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection