
@extends('layouts.app');
@section('content');
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <table class="table">
                                    <tbody style="width:100%">
                                        <tr>
                                        <div class="col-sm-3">
                                            <td style="width:20%"><a href="/posts/{{$post->id}}"><img style="width:100% !important; height:150px !important; object-fit: cover !important;" src="/storage/cover_images/{{$post->cover_image}}"></td>
                                            </div>
                                        <div class="col-sm-6">
                                            <td style="width:80%"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3> </a>
                                            <small> Written on {{$post->created_at}} by {{$post->user->name}}</small></td>
                                         </div></tr>
                                    </tbody>
                                </table>
                            @endforeach
                            {{$posts->links()}}
                        @else
                            <p>No posts found</p>
                        @endif

   
@endsection;
