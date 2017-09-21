@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <a href="/mav/create" class="btn btn-primary">Add New</a>
            <h3><center>Mission and Vision</center></h3>
            @if(count($mav) > 0)
                @foreach($mav as $mav)
                    <table class="table">
                        <tbody>
                            <tr>       
                                <td><h3>{{$mav->title}}</h3> </a> {!!$mav->body!!} <small> Written on {{$mav->created_at}} by {{$mav->user->name}}</small> <br> <br>
                                    <a href="/mav/{{$mav->id}}/edit" class="btn btn-default">Edit</a>
                                    {!!Form::open(['action' => ['MavController@destroy', $mav->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            @else
                <p>No Mission and Vision Found</p>
            @endif
        </div>
    </div>
</div>
@endsection