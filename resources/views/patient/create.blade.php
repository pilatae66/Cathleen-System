@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Staff</li>
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
								<div class="col-md-4">
									<form action="{{ route('patient.store') }}" method="post">
										@csrf
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
										<div class="form-group {{ $errors->has('philNumber') ? 'has-error' : ''  }}">
											<label for="philNumber">Phil Health Number</label>
											<input type="number" name="philNumber" id="philNumber" class="form-control" placeholder="Enter Contact Number">
											@if ( $errors->has('philNumber') )
											<span class="help-block">{{ $errors->first('philNumber') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('birthDate') ? 'has-error' : ''  }}">
											<label>BirthDate</label>
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
						<hr>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('rr') ? 'has-error' : ''  }}">
									<label for="rr">RR</label>
									<input type="text" name="rr" id="rr" class="form-control" placeholder="Enter RR">
									@if ( $errors->has('rr') )
									<span class="help-block">{{ $errors->first('rr') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('wt') ? 'has-error' : ''  }}">
									<label for="wt">WT</label>
									<div class="input-group">
										<input type="text" name="wt" id="wt" class="form-control" placeholder="Enter Weight">
										<span class="input-group-addon">kg</span>
									</div>
									@if ( $errors->has('wt') )
									<span class="help-block">{{ $errors->first('wt') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('ht') ? 'has-error' : ''  }}">
									<label for="ht">HT</label>
									<input type="text" name="ht" id="ht" class="form-control" placeholder="Enter Height">
									@if ( $errors->has('ht') )
									<span class="help-block">{{ $errors->first('ht') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('bp') ? 'has-error' : ''  }}">
									<label for="bp">BP</label>
									<input type="text" name="bp" id="bp" class="form-control" placeholder="Enter Blood Pressure">
									@if ( $errors->has('bp') )
									<span class="help-block">{{ $errors->first('bp') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('temp') ? 'has-error' : ''  }}">
									<label for="temp">TEMP</label>
									<div class="input-group">
										<input type="text" name="temp" id="temp" class="form-control" placeholder="Enter Temperature">
										<span class="input-group-addon">°C</span>
									</div>
									@if ( $errors->has('temp') )
									<span class="help-block">{{ $errors->first('temp') }}</span>
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
