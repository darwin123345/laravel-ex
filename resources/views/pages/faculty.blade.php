@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        Application Form
                        <span class="pull-right">
                            <small><strong>
                                * Type the complete information based on your NSO-copy of Birth Certificate
                            </strong></small>
                        </span>
                    </div>
		            <div class="panel-body ">
					    <legend>Personal Information</legend>
                    
                    {!! Form::open(['action' => 'PreRegistrationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group">
                            {{Form::label('lastname', 'Last Name')}}
                            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'LastName'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('firstname', 'First Name')}}
                            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'FirstName'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('middlename', 'Middle Name')}}
                            {{Form::text('middlename', '', ['class' => 'form-control', 'placeholder' => 'MiddleName'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('birthday', 'Date of Birth')}}
                            {{Form::date('birthday', '', ['class' => 'form-control', 'placeholder' => 'DateOfBirth'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('birth', 'Place of Birth')}}
                            {{Form::text('birth', '', ['class' => 'form-control', 'placeholder' => 'PlaceOfBirth'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'E-mail')}}
                            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('mobile', 'Mobile No.')}}
                            {{Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile No.'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('gender', 'Gender')}} <br>
                            {{Form::radio('gender', 'value', false)}}
                            {{Form::label('gender', 'Male', false)}}
                            &nbsp;
                            {{Form::radio('gender', 'value', false)}}
                            {{Form::label('gender', 'Female', false)}}
                        </div> <hr>
            
		
                <legend>Home Address</legend>
                    <div class="form-group">
                        {{Form::label('street', 'Street')}}
                        {{Form::text('street', '', ['class' => 'form-control', 'placeholder' => 'Street'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('barangay', 'Barangay')}}
                        {{Form::text('barangay', '', ['class' => 'form-control', 'placeholder' => 'Barangay'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('city', 'City/Municipality')}}
                        {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City/Municipality'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('citizenship', 'Citizenship')}}
                        {{Form::text('citizenship', '', ['class' => 'form-control', 'placeholder' => 'Citizenship'])}}
                    </div>
    
                        

                        <div class="form-group">
                            {{Form::label('2x2 ID Picture')}}
                            {{Form::file('2x2')}}
                        </div>
                        <div class="form-group">
                           {{Form::label('NSO Birth Certificate')}} 
                            {{Form::file('nso')}}
                           
                        </div>
                        <div class="form-group">
                        {{Form::label('FORM 138')}} 
                            {{Form::file('138')}}
                        </div>

                         </div>
                        
                        <div class="alert alert-danger" role="alert">
                            <p><strong> <center>
                                NOTE: Incorrect information will invalidate your Pamantasan ng Lungsod ng Pasig College Admission Test (PLP-CAT)
                                </center>   </strong></p> 
                        </div>

                       <center> {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

                        <a href="/" class="btn btn-default">Cancel</a> </center> <br>
                     {!! Form::close() !!}
             </div>         
        </div>
    </div>
</div>  
@endsection

