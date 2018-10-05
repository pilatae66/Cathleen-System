@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Staff</li>
@endsection
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Edit Patient</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<form action="{{ route('patient.update', $patient->id) }}" method="post">
										@csrf
										<input type="hidden" name="_method" value="PATCH">
										<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''  }}">
											<label for="firstname">Firstname</label>
											<input type="text" value="{{ $patient->firstname }}" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
											@if ( $errors->has('firstname') )
											<span class="help-block">{{ $errors->first('firstname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''  }}">
											<label for="middlename">Middlename</label>
											<input type="text" value="{{ $patient->middlename }}" name="middlename" id="middlename" class="form-control" placeholder="Enter Middlename">
											@if ( $errors->has('middlename') )
											<span class="help-block">{{ $errors->first('middlename') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''  }}">
											<label for="lastname">Lastname</label>
											<input type="text" value="{{ $patient->lastname }}" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
											@if ( $errors->has('lastname') )
											<span class="help-block">{{ $errors->first('lastname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''  }}">
											<label for="contact_number">Contact Number</label>
											<input type="text" value="{{ $patient->contact_number }}" name="contact_number" id="contact_number" class="form-control" placeholder="Enter Contact Number">
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
								<div class="form-group {{ $errors->has('patient_type') ? 'has-error' : ''  }}">
									<label for="patient_type">Patient Type</label>
									<select name="patient_type" id="patient_type" class="form-control">
										<option value="{{ $patient->patient_type }}" hidden selected> {{ $patient->patient_type }}</option>
										<option value="Child">Child</option>
										<option value="Adult">Adult</option>
									</select>
									@if ( $errors->has('patient_type') )
									<span class="help-block">{{ $errors->first('patient_type') }}</span>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
