
@extends('layouts.app')
@section('content')
<form action="https://umak.edu.ph/olca/registration/new" method="post" accept-charset="utf-8" role="form" class="form-horizontal" autocomplete="off">
<!-- <div class="row"> -->
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

			<div class="col-xs-6">
					<legend>Personal Information</legend>
					<div class="form-group ">
						<label for="family_name" class="col-sm-3 control-label">Last name</label>
						<div class="col-sm-9">
						<input type="text" id="family_name" class="form-control" placeholder="Last Name" name="family_name" value="">
						<small>
							
						</small>
						</div>
					</div>

				    <div class="form-group ">
				        <label for="first_name" class="col-sm-3 control-label">First name</label>
				        <div class="col-sm-9">
							<input type="text" id="first_name" class="form-control" placeholder="First Name" name="first_name" value="">
							<small>

							</small>
				        </div>

				    </div>

					<div class="form-group ">
				        <label for="middle_name" class="col-sm-3 control-label">Middle name</label>
				        <div class="col-sm-9">
						<input type="text" id="middle_name" class="form-control" placeholder="Middle Name" name="middle_name" value="">
						<small>

						</small>
						</div>
					</div>
							

					<div class="form-group ">
						<label for="birthdate" class="col-sm-3 control-label">Date of Birth</label>
						<div class="col-sm-9">
						<input type="date" id="birthdate" class="form-control datepicker" placeholder="Date of birth" name="birthdate" data-date-format="yyyy-mm-dd" value="">
						<small>
						</small>
						</div>
					</div>

					<div class="form-group ">
						<label for="place_of_birth" class="col-sm-3 control-label">Place of Birth</label>
						<div class="col-sm-9">
						<input type="text" id="place_of_birth" class="form-control" placeholder="Place of Birth" name="place_of_birth" value="">
						<small>
							
						</small>
						</div>
					</div>

					<div class="form-group ">
						<label for="gender" class="col-sm-3 control-label">Gender</label>
						<div class="col-sm-9">
							<div class="radio-inline">
			        		<label><input type="radio" name="gender" value="M" >Male</label>
			        		</div>
			        		<div class="radio-inline">
			        		<label><input type="radio" name="gender" value="F" >Female</label>
			        		</div>
						<small>

						</small>
						</div>
					</div>
					
					<div class="form-group ">
						<label for="email" class="col-sm-3 control-label">Religion</label>
						<div class="col-sm-9">
						<input type="text" id="religion" class="form-control" placeholder="Religion" name="religion" value="">
						<small>
							
						</small>
						</div>
					</div>



			</div>

			<div class="col-xs-6">
					<legend>Complete Home Address</legend>
				
				    <div class="form-group ">
				        <label for="street" class="col-sm-4 control-label">House No. / Street</label>
				        <div class="col-sm-8">
							<input type="text" id="street" class="form-control" placeholder="House No. / Street" name="street" value="">
							<small>

							</small>
				        </div>

				    </div>

					<div class="form-group ">
				        <label for="barangay" class="col-sm-4 control-label">Barangay</label>
				        <div class="col-sm-8">
						<input type="text" id="barangay" class="form-control" placeholder="Barangay" name="barangay" value="">
						<small>

						</small>
						</div>
					</div>
							

					<div class="form-group ">
						<label for="city" class="col-sm-4 control-label">City / Municipality</label>
						<div class="col-sm-8">
						<input type="text" id="city" class="form-control" placeholder="City or Municipality" name="city" value="">
						<small>
							
						</small>
						</div>
					</div>

					<div class="form-group ">
						<label for="zip_code" class="col-sm-4 control-label">Zip Code</label>
						<div class="col-sm-8">
						<input type="text" id="zip_code" class="form-control" placeholder="Zip Code" name="zip_code" value="">
						<small>
							
						</small>
						</div>
					</div>

					<div class="form-group ">
						<label for="citizenship" class="col-sm-4 control-label">Citizenship</label>
						<div class="col-sm-8">
						<input type="text" id="citizenship" class="form-control" placeholder="Citizenship" name="citizenship" value="">
						<small>

						</small>
						</div>
					</div>
					


					<div class="form-group ">
						<label for="contact_no" class="col-sm-4 control-label">Mobile No.</label>
						<div class="col-sm-8">
						<input type="text" id="contact_no" class="form-control" placeholder="Mobile Number" name="contact_no" value="">
						<small>

						</small>
						</div>
					</div>

					<div class="form-group ">
						<label for="email" class="col-sm-4 control-label">E-mail</label>
						<div class="col-sm-8">
						<input type="email" id="email" class="form-control" placeholder="E-mail" name="email" value="">
						<small>
							
						</small>
						</div>
					</div>
			</div>

			<div class="clearfix"></div>
			<legend>Choice of Course Program:</legend>
			<div class="row">
				<div class="col-sm-6">
					
					<div class="form-group ">
						<label for="grade9_elective" class="col-sm-3 control-label">1st Choice</label>
						<div class="col-sm-9">
						<select name="first_choice" class="form-control">
<option value="221">JURIS DOCTOR (J.D.) CURRICULUM 2017</option>
</select>						<small>

						</small>
						</div>
					</div>
				</div> <!-- end col-sm-6 -->

				<div class="col-sm-6">

					<div class="form-group ">
						<label for="applied_for" class="col-sm-4 control-label">2nd Choice</label>
						<div class="col-sm-8">
						<select name="second_choice" class="form-control">
<option value="221">JURIS DOCTOR (J.D.) CURRICULUM 2017</option>
</select>						<small>

						</small>
						</div>
					</div>
					
				</div><!-- end col-sm-6 -->

			</div> <!-- end row -->


		  </div> <!-- end panel body -->
		</div>
		

<!-- </div> -->


<!-- <div class="row"> -->

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  	Educational History
	  	    <span class="pull-right">
	  		    <small>
	  		    	* If field is not applicable type <strong>(NA)</strong>.
	  		    </small>
	  	    </span>
	  </div>

	  <!-- Table -->
		<div class="table-responsive">
			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Name of School</th>
						<th class="text-center">Address of School Graduated</th>
						<th>Academic Year Attended</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-right">Grade School</th>
						<td><input type="text" class="form-control" placeholder="Name of School" name="elementary" value=""></td>
						<td><input type="text" class="form-control" placeholder="School Address" name="elementary_city" value=""></td>
						<td><input type="text" class="form-control" placeholder="Academic Year" name="elementary_year_graduated" value=""></td>
					</tr>
					<tr>
						<th class="text-right">Junior High School</th>
						<td><input type="text" class="form-control" placeholder="Name of School" name="high_school" value=""></td>
						<td><input type="text" class="form-control" placeholder="School Address" name="high_school_city" value=""></td>
						<td><input type="text" class="form-control" placeholder="Academic Year" name="high_school_year_graduated" value=""></td>
					</tr>
					<tr>
						<th class="text-right">Vocational School</th>
						<td><input type="text" class="form-control" placeholder="Name of School" name="last_school" value=""></td>
						<td><input type="text" class="form-control" placeholder="School Address" name="last_school_city" value=""></td>
						<td><input type="text" class="form-control" placeholder="Academic Year" name="last_school_year_graduated" value=""></td>
					</tr>
				</tbody>
			</table>
		</div>
	

	</div>
<!-- </div> -->


<!-- <div class="row"> -->

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  	In case of Emergency, If unable to contact parent, contact:
	  	    <span class="pull-right">
	  		    <small>
	  		    	* If field is not applicable type <strong>(NA)</strong>.
	  		    </small>
	  	    </span>
	  </div>
	  <div class="panel-body">

  		<legend>Guardian's Information</legend>

	  	<div class="col-sm-6">
  		  		<div class="form-group">
  		  	        <label for="guardian" class="col-sm-3 control-label">Legal Guardian</label>
  		  	        <div class="col-sm-8">
  					<input type="text" class="form-control" placeholder="Guardian's Name" name="guardian" id="guardian" value="">
  		  			<small>

  		  			</small>
  		  			</div>
  		  		</div>

  		  		<div class="form-group">
  		  	        <label for="guardian_relationship" class="col-sm-3 control-label">Relationship to Applicant</label>
  		  	        <div class="col-sm-8">
  					<input type="text" class="form-control" placeholder="Relationship to Applicant" name="guardian_relationship" id="guardian_relationship" value="">
  		  			<small>

  		  			</small>
  		  			</div>
  		  		</div>

  		  		<div class="form-group">
  		  	        <label for="guardian_address" class="col-sm-3 control-label">Home Address</label>
  		  	        <div class="col-sm-8">
  					<input type="text" class="form-control" placeholder="Complete Address" name="guardian_address" value="">
  		  			<small>

  		  			</small>
  		  			</div>
  		  		</div>
  		  		<!-- end of guardian's information -->


	  	</div>

	  	<div class="col-sm-6">

		  		<div class="form-group">
		  	        <label for="guardian_phone_no" class="col-sm-3 control-label">Phone Number(Home)</label>
		  	        <div class="col-sm-8">
					<input type="text" class="form-control" placeholder="Guardian Home Phone No." name="guardian_phone_no" id="guardian_phone_no" value="">
		  			<small>

		  			</small>
		  			</div>
		  		</div>

		  		<div class="form-group">
		  	        <label for="guardian_mobile_no" class="col-sm-3 control-label">Mobile Number</label>
		  	        <div class="col-sm-8">
					<input type="text" class="form-control" placeholder="Guardian Mobile Number" name="guardian_mobile_no" id="guardian_mobile_no" value="">
		  			<small>

		  			</small>
		  			</div>
		  		</div>

		  		<div class="form-group">
		  	        <label for="guardian_email" class="col-sm-3 control-label">E-mail Address</label>
		  	        <div class="col-sm-8">
					<input type="text" class="form-control" placeholder="E-mail Address" name="guardian_email" value="">
		  			<small>

		  			</small>
		  			</div>
		  		</div>
	  			<!-- end of guardian's information -->



	  	</div>





	</div>
</div>
<!-- </div> -->


<div class="container">
	<p>Please verify that your not a robot</p>
	<div class="g-recaptcha" data-sitekey="6LdBbBYTAAAAAO_qXg60ywAKH-15Z9PXVfLks-Xr"></div>
</div>

<div class="alert alert-block">
	<p><strong>
		NOTE: Incorrect information will invalidate your admission to UMAK. Be sure you have checked your complete name based on your National Statistics Office (NSO) copy of Birth Certificate.
	</strong></p>
<br>
		<p>
			<button class="btn btn-primary btn-lg" id="btnSubmitApp"><strong>SUBMIT APPLICATION</strong></button>
			<a href="https://umak.edu.ph/olca/registration/new"  class="btn btn-info btn-lg">Clear</a>
		</p>
</div>




</form>

@endsection 