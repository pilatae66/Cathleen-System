@extends('layouts.app')
@section('title')
Patient
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Patient</a></li>
<li class="active">Register</li>
@endsection
@section('content')
<br><br>
<section class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Prenatal Care Service</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('request.postPrenatal',$id) }}" method="post">
									@csrf
									<input type="hidden" name="request_id" value="{{ $request }}">
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
											<label for="name">Client Name</label>
											<input value="{{ $patient->fullName }}" type="text" name="name" id="name" class="form-control">
											@if ( $errors->has('name') )
											<span class="help-block">{{ $errors->first('name') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('client_number') ? 'has-error' : ''  }}">
											<label for="client_number">Client Number</label>
											<input type="text" name="client_number" id="client_number" class="form-control">
											@if ( $errors->has('client_number') )
											<span class="help-block">{{ $errors->first('client_number') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('date') ? 'has-error' : ''  }}">
											<label for="date">Date</label>
											<input type="text" name="date" id="weight" class="form-control datepicker" placeholder="Enter Date">
											@if ( $errors->has('date') )
											<span class="help-block">{{ $errors->first('date') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('time') ? 'has-error' : ''  }}">
											<label for="time">Time</label>
											<input type="text" name="time" id="time" class="form-control timepicker" placeholder="Enter Time">
											@if ( $errors->has('time') )
											<span class="help-block">{{ $errors->first('time') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('blood_pressure') ? 'has-error' : ''  }}">
											<label for="blood_pressure">Blood Pressure</label>
											<input type="text" name="blood_pressure" id="blood_pressure" class="form-control" placeholder="Enter Blood Pressure">
											@if ( $errors->has('blood_pressure') )
											<span class="help-block">{{ $errors->first('blood_pressure') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('temperature') ? 'has-error' : ''  }}">
											<label>Temp.____C</label>
											<input type="text" name="temperature" id="temperature" class="form-control" placeholder="Enter Temp.">
											@if ( $errors->has('temperature') )
											<span class="help-block">{{ $errors->first('temperature') }}</span>
											@endif
										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''  }}">
											<label for="weight">Weight___kg.</label>
											<input type="text" name="weight" id="weight" class="form-control" placeholder="Enter Weight">
											@if ( $errors->has('weight') )
											<span class="help-block">{{ $errors->first('weight') }}</span>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('breast') ? 'has-error' : ''  }}">
									<label for="breast">BREAST</label>
									<select name="breast" id="breast" class="form-control">
										<option hidden selected value="">Choose Status...</option>
										<option value="mass">Mass</option>
										<option value="nipple_discharge">Nipple Discharge</option>
										<option value="skin_orange">Skin-orange peel or dimpling</option>
										<option value="enlarged_axillary">Enlarged axillary lymph nodes</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('heart') ? 'has-error' : ''  }}">
									<label for="heart">HEART/CHEST</label>
									<select name="heart" id="heart" class="form-control">
										<option hidden selected value="">Choose Status...</option>
										<option value="Abnormal_heart">Abnormal heart sounds/cardiac rate</option>
										<option value="Abnormal_breath_sounds">Abnormal breath sounds/respiratory rate</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('pelvis') ? 'has-error' : ''  }}">
									<label for="pelvis">PELVIC EXAMINATION</label>
									<select name="pelvis" id="pelvis" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="perineum">Perineum</option>
										<option value="vagina">Varicosities</option>     
										<option value="warts">Warts/Eczema</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('unrinary') ? 'has-error' : ''  }}">
									<label for="unrinary">Urinary Tract</label>
									<select name="urinary" id="urinary" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="uti">Urinary Tract Infection</option>
										<option value="none">None</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''  }}">
									<label for="assessment">ASSESSMENT:</label>
									<input type="text" name="assessment" id="assessment" class="form-control" placeholder="Assessment">
									@if ( $errors->has('assessment') )
									<span class="help-block">{{ $errors->first('assessment') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('plans') ? 'has-error' : ''  }}">
									<label for="plans">PLANS( Procedure/Treatement/Referrals )</label>
									<input type="text" name="plans" id="plans" class="form-control" placeholder="Plans">
									@if ( $errors->has('plans') )
									<span class="help-block">{{ $errors->first('plans') }}</span>
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
