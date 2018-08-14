@extends('layouts.app')
@section('title')
Admin
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Admin</a></li>
<li class="active">Create</li>
@endsection
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Register Admin</h3>
				</div>
				<div class="box-body">
						<form action="{{ route('admin.store') }}" method="post">
							@csrf
							<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''  }}">
								<label for="firstname">Firstname</label>
								<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
								@if ( $errors->has('firstname') )
								<span class="help-block">{{ $errors->first('firstname') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''  }}">
								<label for="lastname">Lastname</label>
								<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
								@if ( $errors->has('lastname') )
								<span class="help-block">{{ $errors->first('lastname') }}</span>
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
