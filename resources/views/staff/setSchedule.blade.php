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
			<form role="form" action="{{ route('staff.postSchedule', $patient->id) }}" method="POST">
                @csrf
                <input type="hidden" name="patient_id" value="{{ $patient->id }}">
				<div class="box-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group {{ $errors->first('date') ? "has-error" : "" }}">
								<label for="date">Schedule Date</label>
                                <input type="text" name="date" class="form-control datepicker" id="date" placeholder="Enter Schedule Date">
                                @if ($errors->first('date'))
                                <small class="help-block">{{ $errors->first('date') }}</small>
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
