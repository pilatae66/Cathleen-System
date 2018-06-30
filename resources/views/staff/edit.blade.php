@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="{{ route('staff.index') }}"><i class="fa fa-dashboard"></i> Staff</a></li>
<li class="active">Edit Staff</li>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Staff</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
            <form role="form" action="{{ route('staff.update', $staff->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
				<div class="box-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first('firstname') ? "has-error" : "" }}">
                                        <label for="lastname">Staff Firstname</label>
                                        <input type="text" name="firstname" value="{{ $staff->staffFname }}" class="form-control" id="firstname" placeholder="Enter firstname">
                                        @if ($errors->first('firstname'))
                                        <small class="help-block">{{ $errors->first('firstname') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->first('lastname') ? "has-error" : "" }}">
                                        <label for="lastname">Staff Lastname</label>
                                        <input type="text" name="lastname" value="{{ $staff->staffLname }}" class="form-control" id="lastname" placeholder="Enter lastname">
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
                                            <option value="{{ $staff->gender }}" selected hidden>{{ $staff->gender }}</option>
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
                                        <input type="text" name="position" value="{{ $staff->position }}" class="form-control" id="position" placeholder="Enter Position">
                                        @if ($errors->first('position'))
                                        <small class="help-block">{{ $errors->first('position') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->first('contactNumber') ? "has-error" : "" }}">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" name="contactNumber" value="{{ $staff->contactNumber }}" class="form-control" id="contact" placeholder="Enter Contact Number">
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
                                        <input type="text" name="address" value="{{ $staff->address }}" class="form-control" id="address" placeholder="Enter Address">
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
