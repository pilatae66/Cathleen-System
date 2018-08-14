@extends('layouts.app')
@section('title')
Create Health Record
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Create Health Record</li>
@endsection
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Add Health Record</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<form action="{{ route('healthRecord.store') }}" method="post">
								@csrf
								<div class="form-group {{ $errors->has('diagnosis') ? 'has-error' : ''  }}">
									<label for="diagnosis">Diagnosis</label>
									<input type="text" name="diagnosis" id="diagnosis" class="form-control" placeholder="Enter Diagnosis">
									@if ( $errors->has('diagnosis') )
									<span class="help-block">{{ $errors->first('diagnosis') }}</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('treatment') ? 'has-error' : ''  }}">
									<label for="treatment">Treatment</label>
									<input type="text" name="treatment" id="treatment" class="form-control" placeholder="Enter Treatment">
									@if ( $errors->has('treatment') )
									<span class="help-block">{{ $errors->first('treatment') }}</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('status') ? 'has-error' : ''  }}">
									<label for="status" id="status">Status</label>
									<select name="status" class="form-control">
										<option value="" selected hidden>Choose Status...</option>
										<option value="Treated">Treated</option>
										<option value="Under Observation">Under Observation</option>
									</select>
									@if ( $errors->has('status') )
									<span class="help-block">{{ $errors->first('status') }}</span>
									@endif
								</div>
							</div>
                        </div>
                        <input type="hidden" name="patientID" value="{{ $patient->id }}">
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
