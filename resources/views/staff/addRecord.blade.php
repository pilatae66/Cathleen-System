@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Health Record</li>
@endsection
@section('content')
<br><br>
<section class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Add Record</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('patient.store') }}" method="post">
									@csrf
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('id') ? 'has-error' : ''  }}">
											<label for="id">Patient ID</label>
											<input type="text" name="id" id="id" class="form-control" placeholder="Enter Patient ID">
											@if ( $errors->has('id') )
											<span class="help-block">{{ $errors->first('id') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('family_no.') ? 'has-error' : ''  }}">
											<label for="family_no.">Family No.</label>
											<input type="text" name="family_no." id="family_no." class="form-control" placeholder="Enter Family No.">
											@if ( $errors->has('family_no.') )
											<span class="help-block">{{ $errors->first('family_no.') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''  }}">
											<label for="firstname">Firstname</label>
											<input type="number" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
											@if ( $errors->has('firstname') )
											<span class="help-block">{{ $errors->first('firstname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''  }}">
											<label>Middlename</label>
											<input type="text" class="form-control" name="middlename" id="datepicker" placeholder="Enter Middlename">
											@if ( $errors->has('middlename') )
											<span class="help-block">{{ $errors->first('middlename') }}</span>
											@endif
										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''  }}">
											<label for="lastname">Lastname</label>
											<input type="number" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
											@if ( $errors->has('lastname') )
											<span class="help-block">{{ $errors->first('lastname') }}</span>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('symptoms') ? 'has-error' : ''  }}">
									<label for="symptoms">Symptoms</label>
									<textarea type="number" name="symptoms" id="symptoms" class="form-control"></textarea>
									@if ( $errors->has('symptoms') )
									<span class="help-block">{{ $errors->first('symptoms') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('section') ? 'has-error' : ''  }}">
									<label for="section">Section</label>
									<select name="section" id="section" class="form-control">
										<option value="" hidden selected>Choose section...</option>
										<option value="Dental">Dental</option>
										<option value="Fecalysis">Fecalysis</option>
										<option value="Hematology">Hematology</option>
										<option value="Prenatal">Prenatal</option>
										<option value="Xray">Xray</option>
										<option value="Rehabilitation">Rehabilitation</option>
										<option value="Sputum">Sputum</option>
										<option value="Urinalysis">Urinalysis</option>
										<option value="Maternity">Maternity</option>
									</select>
									@if ( $errors->has('section') )
									<span class="help-block">{{ $errors->first('section') }}</span>
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
