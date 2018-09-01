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
								<form action="{{ route('patient.store') }}" method="post">
									@csrf
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('arrival') ? 'has-error' : ''  }}">
											<label for="arrival">Date/Time of Arrival</label>
											<input type="text" name="arrival" id="arrival" class="form-control">
											@if ( $errors->has('arrival') )
											<span class="help-block">{{ $errors->first('arrival') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('disposition') ? 'has-error' : ''  }}">
											<label for="disposition">Time of Disposition</label>
											<input type="text" name="disposition" id="disposition" class="form-control">
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
										<div class="form-group {{ $errors->has('birthDate') ? 'has-error' : ''  }}">
											<label>Date of Birth</label>
											<input type="text" class="form-control" name="birthDate" id="datepicker" placeholder="Choose Birth Date">

										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('contactNumber') ? 'has-error' : ''  }}">
											<label for="contactNumber">Contact Number</label>
											<input type="number" name="contactNumber" id="contactNumber" class="form-control" placeholder="Enter Contact Number">
											@if ( $errors->has('contactNumber') )
											<span class="help-block">{{ $errors->first('contactNumber') }}</span>
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
								<div class="form-group {{ $errors->has('civilStatus') ? 'has-error' : ''  }}">
									<label for="civilStatus">Civil Status</label>
									<select name="civilStatus" id="civilStatus" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
									@if ( $errors->has('civilStatus') )
									<span class="help-block">{{ $errors->first('civilStatus') }}</span>
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
						{{-- <hr>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group {{ $errors->has('plan') ? 'has-error' : ''  }}">
									<label for="plan">Plan more children?</label><br>
									<div class="form-group">
										<label>
											<input type="radio" name="plan" checked> Yes
										</label>
										<label>
											<input type="radio" name="plan"> No
										</label>
									</div>
									@if ( $errors->has('plan') )
									<span class="help-block">{{ $errors->first('plan') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">FP METHOD:</div>
							<div class="col-md-3">
								<div class="form-group {{ $errors->has('current') ? 'has-error' : ''  }}">
									<label for="current">Current use?</label><br>
									<div class="form-group">
										<label>
											<input type="radio" name="current" value="on" checked> Yes
										</label>
										<label>
											<input type="radio" name="current" value="off"> No
										</label>
									</div>
									@if ( $errors->has('current') )
									<span class="help-block">{{ $errors->first('current') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group {{ $errors->has('previous') ? 'has-error' : ''  }}">
									<label for="previous">Previous use?</label><br>
									<div class="form-group">
										<label>
											<input type="radio" name="previous" value="on" checked> Yes
										</label>
										<label>
											<input type="radio" name="previous" value="off"> No
										</label>
									</div>
									@if ( $errors->has('previous') )
									<span class="help-block">{{ $errors->first('previous') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								FP METHOD USED:
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('vss') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="vss" id="vss">
                                    <label for="vss">VSS</label>
									@if ( $errors->has('vss') )
									<span class="help-block">{{ $errors->first('vss') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('iud') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="iud" id="iud">
                                    <label for="iud">IUD</label>
									@if ( $errors->has('iud') )
									<span class="help-block">{{ $errors->first('iud') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('pill') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="pill" id="pill">
                                    <label for="pill">PILL</label>
									@if ( $errors->has('pill') )
									<span class="help-block">{{ $errors->first('pill') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('dmpa') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="dmpa" id="dmpa">
                                    <label for="dmpa">DMPA</label>
									@if ( $errors->has('dmpa') )
									<span class="help-block">{{ $errors->first('dmpa') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('nfp') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="nfp" id="nfp">
                                    <label for="nfp">NFP</label>
									@if ( $errors->has('nfp') )
									<span class="help-block">{{ $errors->first('nfp') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('lam') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="lam" id="lam">
                                    <label for="lam">LAM</label>
									@if ( $errors->has('lam') )
									<span class="help-block">{{ $errors->first('lam') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('condom') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="condom" id="condom">
                                    <label for="condom">CONDOM</label>
									@if ( $errors->has('condom') )
									<span class="help-block">{{ $errors->first('condom') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-6 col-md-offset-3">
								<div class="form-group {{ $errors->has('other') ? 'has-error' : ''  }}">
                                    <input type="checkbox" name="other" id="other">
                                    <label for="other">Others specify: <input type="text" class="form-inline" name="other" disabled></label>

									@if ( $errors->has('other') )
									<span class="help-block">{{ $errors->first('other') }}</span>
									@endif
								</div>
							</div>
						</div> --}}
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
