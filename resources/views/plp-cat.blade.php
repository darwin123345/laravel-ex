@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                  <b>Pamantasan ng Lungsod ng Pasig</b>
                        <span class="pull-right">
                            <small><strong>
                                * No. of Applicants : {{count($preregistration)}}
                            </strong></small>
                        </span>
                </div>
                 <h3><center>PLP-CAT</center></h3>
                <div class="panel-body">
                    @if(count($preregistration) > 0)
                    <table class="table table-bordered" >
                        <tbody>
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Academic Track</th>
                                <th>Course</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                      

                        @foreach($preregistration as $p)
                                    <tr>       
                                        <td>{{$p->lastname}}, {{$p->firstname}} {{$p->middlename}}</td>
                                        <td>{{$p->street}} {{$p->barangay}} {{$p->city}}</td>
                                          <td>{{$p->age}}</td>
                                        <td>{{$p->email}}</td>
                                        <td>{{$p->mobile}}</td>
                                        <td>{{$p->track}}</td>
                                        <td>{{$p->course}}</td>
                                       <td> {{Form::submit('Submit', ['class'=>'btn btn-success'])}}   {{Form::submit('Submit', ['class'=>'btn btn-danger'])}} </td>
                                    </tr>
                        @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No Records</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection