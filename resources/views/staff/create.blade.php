@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="{{ route('staff.index') }}"><i class="fa fa-dashboard"></i> Staff</a></li>
<li class="active">Add Staff</li>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Add Staff</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" action="{{ route('staff.store') }}" method="POST">
				@csrf
				<div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->first('username') ? "has-error" : "" }}">
								<label for="username">Staff Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                                @if ($errors->first('username'))
                                <small class="help-block">{{ $errors->first('username') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->first('password') ? "has-error" : "" }}">
								<label for="password">Staff Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                @if ($errors->first('password'))
                                <small class="help-block">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="password">Verify Password</label>
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter Password Again">
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->first('firstname') ? "has-error" : "" }}">
								<label for="lastname">Staff Firstname</label>
								<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter firstname">
                                @if ($errors->first('firstname'))
                                <small class="help-block">{{ $errors->first('firstname') }}</small>
                                @endif
                            </div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->first('lastname') ? "has-error" : "" }}">
								<label for="lastname">Staff Lastname</label>
								<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter lastname">
                                @if ($errors->first('lastname'))
                                <small class="help-block">{{ $errors->first('lastname') }}</small>
                                @endif
                            </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->first('gender') ? "has-error" : "" }}">
								<label for="gender">Gender</label>
								<select class="form-control" name="gender" id="gender">
                                    <option value="" selected disabled hidden>Choose here</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
                                </select>
                                @if ($errors->first('gender'))
                                <small class="help-block">{{ $errors->first('gender') }}</small>
                                @endif
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group {{ $errors->first('position') ? "has-error" : "" }}">
								<label for="position">Position</label>
								<input type="text" name="position" class="form-control" id="position" placeholder="Enter Position">
                                @if ($errors->first('position'))
                                <small class="help-block">{{ $errors->first('position') }}</small>
                                @endif
                            </div>
						</div>
						<div class="col-md-3">
							<div class="form-group {{ $errors->first('contactNumber') ? "has-error" : "" }}">
								<label for="contact">Contact Number</label>
								<input type="text" name="contactNumber" class="form-control" id="contact" placeholder="Enter Contact Number">
                                @if ($errors->first('contactNumber'))
                                <small class="help-block">{{ $errors->first('contactNumber') }}</small>
                                @endif
                            </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group {{ $errors->first('address') ? "has-error" : "" }}">
								<label for="address">Address</label>
								<input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                                @if ($errors->first('address'))
                                <small class="help-block">{{ $errors->first('address') }}</small>
                                @endif
                            </div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<div class="pull-right">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /.box -->
	</div>
</div>
@endsection
