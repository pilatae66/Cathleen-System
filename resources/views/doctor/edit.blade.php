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
											<input type="text" value="{{ $patient->firstName }}" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
											@if ( $errors->has('firstname') )
											<span class="help-block">{{ $errors->first('firstname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''  }}">
											<label for="middlename">Middlename</label>
											<input type="text" value="{{ $patient->middleName }}" name="middlename" id="middlename" class="form-control" placeholder="Enter Middlename">
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
											<input type="text" value="{{ $patient->lastName }}" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
											@if ( $errors->has('lastname') )
											<span class="help-block">{{ $errors->first('lastname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('contactNumber') ? 'has-error' : ''  }}">
											<label for="contactNumber">Contact Number</label>
											<input type="number" value="{{ $patient->contactNumber }}" name="contactNumber" id="contactNumber" class="form-control" placeholder="Enter Contact Number">
											@if ( $errors->has('contactNumber') )
											<span class="help-block">{{ $errors->first('contactNumber') }}</span>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="image text-center">
									<img class="img-circle" src="{{ asset('storage/CCS.png') }}" alt="Picture" height="140px" width="140px" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''  }}">
									<label for="gender">Gender</label>
									<select name="gender" id="gender" class="form-control">
										<option value="{{ $patient->gender }}" hidden selected> {{ $patient->gender }}</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									@if ( $errors->has('gender') )
									<span class="help-block">{{ $errors->first('gender') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group {{ $errors->has('address') ? 'has-error' : ''  }}">
									<label for="address">Address</label>
									<input type="text" value="{{ $patient->address }}" name="address" id="address" class="form-control" placeholder="Enter Address">
									@if ( $errors->has('address') )
									<span class="help-block">{{ $errors->first('address') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('symptoms') ? 'has-error' : ''  }}">
									<label for="symptoms">Symptoms</label>
									<textarea name="symptoms" class="form-control" rows="3" placeholder="Enter Symptoms">{{ $patient->symptoms }}</textarea>
									@if ( $errors->has('symptoms') )
									<span class="help-block">{{ $errors->first('symptoms') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('docID') ? 'has-error' : ''  }}">
									<label for="docID">Doctor</label>
									<select name="docID" id="docID" class="form-control">
										<option value="{{ $patient->docID }}" hidden selected>Dr. {{ $patient->doctor->doctorLname }}</option>
										@foreach ($doctors as $doctor)
										<option value="{{ $doctor->id }}">Dr. {{ $doctor->doctorLname }}</option>
										@endforeach
									</select>
									@if ( $errors->has('docID') )
									<span class="help-block">{{ $errors->first('docID') }}</span>
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
