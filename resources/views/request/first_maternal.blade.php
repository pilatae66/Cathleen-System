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
					<h3 class="box-title">Maternal Care Service</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('request.postMaternity', $patient->id) }}" method="post">
									@csrf
									<input type="hidden" name="request_id" value="{{ $request }}">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('blood_pressure') ? 'has-error' : ''  }}">
											<label for="blood_pressure">Blood Pressure____mmHG</label>
											<input type="text" name="blood_pressure" id="blood_pressure" class="form-control">
											@if ( $errors->has('blood_pressure') )
											<span class="help-block">{{ $errors->first('blood_pressure') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('pulse_rate') ? 'has-error' : ''  }}">
											<label for="pulse_rate">Pulse Rate_______/min</label>
											<input type="text" name="pulse_rate" id="pulse_rate" class="form-control">
											@if ( $errors->has('pulse_rate') )
											<span class="help-block">{{ $errors->first('pulse_rate') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''  }}">
											<label for="weight">Weight:______kg/lbs.</label>
											<input type="text" name="weight" id="weight" class="form-control" placeholder="Enter Weight">
											@if ( $errors->has('weight') )
											<span class="help-block">{{ $errors->first('weight') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('height') ? 'has-error' : ''  }}">
											<label for="height">Height:______m/ft.</label>
											<input type="text" name="height" id="height" class="form-control" placeholder="Enter Height">
											@if ( $errors->has('height') )
											<span class="help-block">{{ $errors->first('height') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('temperature') ? 'has-error' : ''  }}">
											<label for="temperature">Temp.______C</label>
											<input type="text" name="temperature" id="temperature" class="form-control" placeholder="Enter Temp.">
											@if ( $errors->has('temperature') )
											<span class="help-block">{{ $errors->first('temperature') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="text-center">
										<hr>
										<h4><b>PHYSICAL EXAMINATION</b></h4>
										<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('conjunctiva') ? 'has-error' : ''  }}">
											<label>CONJUNCTIVA</label>
											<select name="conjunctiva" id="conjunctiva" class="form-control">
												<option disabled hidden selected>Choose Status...</option>
												<option value="Pale">Pale</option>
												<option value="Yellowish">Yellowish</option>
											</select>
											@if ( $errors->has('conjunctiva') )
											<span class="help-block">{{ $errors->first('conjunctiva') }}</span>
											@endif
										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('neck') ? 'has-error' : ''  }}">
											<label for="neck">NECK</label>
											<select name="neck" id="neck" class="form-control">
												<option disabled hidden selected>Choose Status...</option>
												<option value="Enlarged thyroid">Enlarged thyroid</option>
												<option value="Enlarged lymph nodes">Enlarged lymph nodes</option>
											</select>
											@if ( $errors->has('neck') )
											<span class="help-block">{{ $errors->first('neck') }}</span>
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
										<option disabled hidden selected>Choose Status...</option>
										<option value="Mass">Mass</option>
										<option value="Nipple Discharge">Nipple Discharge</option>
										<option value="Skin-orange peel or dimpling">Skin-orange peel or dimpling</option>
										<option value="Enlarged axillary lymph nodes">Enlarged axillary lymph nodes</option>
									</select>
									@if ( $errors->has('breast') )
									<span class="help-block">{{ $errors->first('breast') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('heart') ? 'has-error' : ''  }}">
									<label for="heart">HEART & LUNGS</label>
									<select name="heart" id="heart" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="Abnormal heart sounds/cardiac rate">Abnormal heart sounds/cardiac rate</option>
										<option value="Abnormal breath sounds/respiratory rate">Abnormal breath sounds/respiratory rate</option>
									</select>
									@if ( $errors->has('heart') )
									<span class="help-block">{{ $errors->first('heart') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('pelvic') ? 'has-error' : ''  }}">
									<label for="pelvic">PELVIC EXAMINATION</label>
									<select name="pelvic" id="pelvic" class="form-control">
										<option disabled hidden selected>Choose Status...</option>
										<option value="Perineum">Perineum</option>
										<option value="Vagina">Vagina</option>
									</select>
									@if ( $errors->has('pelvic') )
									<span class="help-block">{{ $errors->first('pelvic') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('immune') ? 'has-error' : ''  }}">
									<label for="age">IMMUNIZATION</label>
									<select name="immune" id="immune" class="form-control">
										<option hidden selected>Choose Status...</option>
										<option value="1st dose(as early as possible)">1st dose(as early as possible)</option>
										<option value="2nd dose(at least 4 weeks later)">2nd dose(at least 4 weeks later)</option>     
										<option value="3rd dose(at least 6 months later)">3rd dose(at least 6 months later)</option>
										<option value="4th dose(at least 1 year late)">4th dose(at least 1 year late)</option>
										<option value="5th dose(at least 1 year later)">5th dose(at least 1 year later)</option>
									</select>
									@if ( $errors->has('immune') )
									<span class="help-block">{{ $errors->first('immune') }}</span>
									@endif
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
								<div class="form-group {{ $errors->has('referal') ? 'has-error' : ''  }}">
									<label for="referal">REFERRAL</label>
									<input type="text" name="referal" id="referal" class="form-control" placeholder="Referral">
									@if ( $errors->has('referal') )
									<span class="help-block">{{ $errors->first('referal') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('return_visit') ? 'has-error' : ''  }}">
									<label for="return_visit">RETURN VISIT</label>
									<input type="text" name="return_visit" id="return_visit" class="form-control datepicker" placeholder="Return Visit">
									@if ( $errors->has('return_visit') )
									<span class="help-block">{{ $errors->first('return_visit') }}</span>
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
