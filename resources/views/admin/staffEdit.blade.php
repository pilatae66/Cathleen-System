@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Staff</a></li>
<li class="active">Edit</li>
@endsection
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Register Staff</h3>
				</div>
				<div class="box-body">
						<form action="{{ route('admin.staffUpdate', $staff->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
							<div class="form-group {{ $errors->has('staffFname') ? 'has-error' : ''  }}">
								<label for="staffFname">Firstname</label>
								<input type="text" name="staffFname" id="staffFname" class="form-control" value="{{ $staff->staffFname }}" placeholder="Enter Firstname">
								@if ( $errors->has('staffFname') )
								<span class="help-block">{{ $errors->first('staffFname') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('staffLname') ? 'has-error' : ''  }}">
								<label for="staffLname">Lastname</label>
								<input type="text" name="staffLname" id="staffLname" class="form-control" value="{{ $staff->staffLname }}" placeholder="Enter Lastname">
								@if ( $errors->has('staffLname') )
								<span class="help-block">{{ $errors->first('staffLname') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('contactNumber') ? 'has-error' : ''  }}">
								<label for="contactNumber">Contact Number</label>
								<input type="number" name="contactNumber" id="contactNumber" class="form-control" value="{{ $staff->contactNumber }}" placeholder="Enter Contact Number">
								@if ( $errors->has('contactNumber') )
								<span class="help-block">{{ $errors->first('contactNumber') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('position') ? 'has-error' : ''  }}">
								<label for="position">Position</label>
								<input type="text" name="position" id="position" class="form-control" value="{{ $staff->position }}" placeholder="Enter Address">
								@if ( $errors->has('position') )
								<span class="help-block">{{ $errors->first('position') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''  }}">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="{{ $staff->gender }}" hidden selected>{{ $staff->gender }}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
								@if ( $errors->has('gender') )
								<span class="help-block">{{ $errors->first('gender') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('address') ? 'has-error' : ''  }}">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control"  value="{{ $staff->address }}" placeholder="Enter Address">
								@if ( $errors->has('address') )
								<span class="help-block">{{ $errors->first('address') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('username') ? 'has-error' : ''  }}">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" value="{{ $staff->username }}" placeholder="Enter Contact Number">
								@if ( $errors->has('username') )
								<span class="help-block">{{ $errors->first('username') }}</span>
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
