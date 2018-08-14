@extends('layouts.app')
@section('title')
Midwife
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Midwife</a></li>
<li class="active">Create</li>
@endsection
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Register Midwife</h3>
				</div>
				<div class="box-body">
						<form action="{{ route('admin.midwifeStore') }}" method="post">
							@csrf
							<div class="form-group {{ $errors->has('doctorFname') ? 'has-error' : ''  }}">
								<label for="doctorFname">Firstname</label>
								<input type="text" name="doctorFname" id="doctorFname" class="form-control" placeholder="Enter Firstname">
								@if ( $errors->has('doctorFname') )
								<span class="help-block">{{ $errors->first('doctorFname') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('doctorLname') ? 'has-error' : ''  }}">
								<label for="doctorLname">Lastname</label>
								<input type="text" name="doctorLname" id="doctorLname" class="form-control" placeholder="Enter Lastname">
								@if ( $errors->has('doctorLname') )
								<span class="help-block">{{ $errors->first('doctorLname') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('contactNumber') ? 'has-error' : ''  }}">
								<label for="contactNumber">Contact Number</label>
								<input type="number" name="contactNumber" id="contactNumber" class="form-control" placeholder="Enter Contact Number">
								@if ( $errors->has('contactNumber') )
								<span class="help-block">{{ $errors->first('contactNumber') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('address') ? 'has-error' : ''  }}">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
								@if ( $errors->has('address') )
								<span class="help-block">{{ $errors->first('address') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('username') ? 'has-error' : ''  }}">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="Enter Contact Number">
								@if ( $errors->has('username') )
								<span class="help-block">{{ $errors->first('username') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : ''  }}">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Enter Contact Number">
								@if ( $errors->has('password') )
								<span class="help-block">{{ $errors->first('password') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''  }}">
								<label for="password_confirmation">Verify Password</label>
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Contact Number">
								@if ( $errors->has('password_confirmation') )
								<span class="help-block">{{ $errors->first('password_confirmation') }}</span>
								@endif
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
