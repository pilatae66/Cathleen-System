@extends('layouts.app')
@section('title')
Patient
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Patient</a></li>
<li class="active">Register</li>
@endsection
@section('content')
<br><br>
<section class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Register Patient</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('staff.storeAdult') }}" method="post">
									@csrf
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('arrival') ? 'has-error' : ''  }}">
											<label for="arrival">Date/Time of Arrival</label>
											<input type="text" name="arrival" id="arrival" class="form-control datepicker">
											@if ( $errors->has('arrival') )
											<span class="help-block">{{ $errors->first('arrival') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('disposition') ? 'has-error' : ''  }}">
											<label for="disposition">Time of Disposition</label>
											<input type="text" name="disposition" id="disposition" class="form-control timepicker">
											@if ( $errors->has('disposition') )
											<span class="help-block">{{ $errors->first('disposition') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''  }}">
											<label for="firstname">Firstname</label>
											<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
											@if ( $errors->has('firstname') )
											<span class="help-block">{{ $errors->first('firstname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''  }}">
											<label for="middlename">Middlename</label>
											<input type="text" name="middlename" id="middlename" class="form-control" placeholder="Enter Middlename">
											@if ( $errors->has('middlename') )
											<span class="help-block">{{ $errors->first('middlename') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''  }}">
											<label for="lastname">Lastname</label>
											<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
											@if ( $errors->has('lastname') )
											<span class="help-block">{{ $errors->first('lastname') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('dob') ? 'has-error' : ''  }}">
											<label>Date of Birth</label>
											<input type="text" class="form-control datepicker" name="dob" id="datepicker" placeholder="Choose Birth Date">

										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''  }}">
											<label for="contact_number">Contact Number</label>
											<input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Enter Contact Number">
											@if ( $errors->has('contact_number') )
											<span class="help-block">{{ $errors->first('contact_number') }}</span>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('occupation') ? 'has-error' : ''  }}">
									<label for="occupation">Occupation</label>
									<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Enter Occupation">
									@if ( $errors->has('occupation') )
									<span class="help-block">{{ $errors->first('occupation') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('educational_background') ? 'has-error' : ''  }}">
									<label for="educational_background">Educational Background</label>
									<input type="text" name="educational_background" id="educational_background" class="form-control">
									@if ( $errors->has('educational_background') )
									<span class="help-block">{{ $errors->first('educational_background') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('in_case_of_emergency') ? 'has-error' : ''  }}">
									<label for="in_case_of_emergency">In Case of Emergency Contact</label>
									<input type="text" name="in_case_of_emergency" id="in_case_of_emergency" class="form-control" placeholder="Enter Contact Number">
									@if ( $errors->has('in_case_of_emergency') )
									<span class="help-block">{{ $errors->first('in_case_of_emergency') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('age') ? 'has-error' : ''  }}">
									<label for="age">Age</label>
									<input type="number" name="age" id="age" class="form-control" placeholder="Enter Age">
									@if ( $errors->has('age') )
									<span class="help-block">{{ $errors->first('age') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''  }}">
									<label for="gender">Gender</label>
									<select name="gender" id="gender" class="form-control">
										<option disabled hidden selected>Choose gender..</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									@if ( $errors->has('gender') )
									<span class="help-block">{{ $errors->first('gender') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('civil_status') ? 'has-error' : ''  }}">
									<label for="civil_status">Civil Status</label>
									<select name="civil_status" id="civil_status" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
									@if ( $errors->has('civil_status') )
									<span class="help-block">{{ $errors->first('civil_status') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('address') ? 'has-error' : ''  }}">
									<label for="address">Address</label>
									<input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
									@if ( $errors->has('address') )
									<span class="help-block">{{ $errors->first('address') }}</span>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
