@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">   
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/history/create" class="btn btn-primary">Add New</a>
            <center><h3>History</h3></center>
            @if(count($history) > 0)
                @foreach($history as $history)
                    <table class="table">
                        <tbody>
                            <tr>        
                                <td><img style="width:100%" src="/storage/cover_images/{{$history->cover_image}}"></td>
                                <td><h3>{{$history->title}}</h3> </a> {!!$history->body!!} <small> Written on {{$history->created_at}} by {{$history->user->name}}</small> <br> <br>
                                    <a href="/history/{{$history->id}}/edit" class="btn btn-default">Edit</a>
                                    {!!Form::open(['action' => ['HistoryController@destroy', $history->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            @else
                <p>No History found</p>
            @endif
        </div>
    </div>
</div>
@endsection