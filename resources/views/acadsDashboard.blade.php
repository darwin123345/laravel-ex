@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <a href="/acads/create" class="btn btn-primary">Add New</a>
                <h3><center>Academic Calendar</center></h3>
                    @if(count($acads) > 0)
                        @foreach($acads as $acad)
                            <table class="table">
                                <tbody>
                                    <tr>    
                                        <td><h3>{{$acad->title}}</h3> </a> {!!$acad->body!!} <small> Written on {{$acad->created_at}} by {{$acad->user->name}}</small> <br> <br>
                                        <a href="/acads/{{$acad->id}}/edit" class="btn btn-default">Edit</a>
                                        {!!Form::open(['action' => ['AcadsController@destroy', $acad->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                @else
                    <p>No Academic Calendar Found</p>
                @endif
            </div>  
        </div>
    </div>
@endsection