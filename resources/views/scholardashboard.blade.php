@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/scholars/create" class="btn btn-primary">Add New</a>
            <center><h3>Scholarship Programs</h3></center>
            @if(count($scholars) > 0)
                @foreach($scholars as $scholar)
                    <table class="table">
                        <tbody>
                            <tr>        
                                <td><h3>{{$scholar->title}}</h3> </a> {!!$scholar->body!!} <small> Written on {{$scholar->created_at}} by {{$scholar->user->name}}</small> <br> <br>
                                    <a href="/scholars/{{$scholar->id}}/edit" class="btn btn-default">Edit</a>
                                    {!!Form::open(['action' => ['ScholarshipsController@destroy', $scholar->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            @else
                <p>No Scholarship Programs Found</p>
            @endif
        </div>
    </div>
</div>
@endsection