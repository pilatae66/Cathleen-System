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
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
					<h3 class="box-title">Immunization Service</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('request.postImmunization',$id) }}" method="post">
									@csrf
									<input type="hidden" name="request_id" value="{{ $request }}">
									<div class="col-md-12">
										<div class="form-group {{ $errors->has('date_visit') ? 'has-error' : ''  }}">
											<label for="date_visit">Date of visit</label>
											<input type="text" name="date_visit" id="date_visit" class="form-control datepicker" placeholder="Enter Date of Visit">
											@if ( $errors->has('date_visit') )
											<span class="help-block">{{ $errors->first('date_visit') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group {{ $errors->has('services') ? 'has-error' : ''  }}">
											<label for="services">Essential Health and Nutrition Services</label>
											<select name="services" class="form-control" id="">
                                                <option hidden selected value="">Choose...</option>
                                                <option value="newborn">Newborn Screening</option>
                                                <option value="bcg">BCG (At birth)</option>
                                                <option value="dpt">DPT (6 wks, 10 wks, 14 wks old)</option>
                                                <option value="opv">OPV (6 wks, 10 wks, 14 wks old)</option>
                                                <option value="hepa">Hepatitis B (6 wks, 10 wks, 14 wks old)</option>
                                                <option value="measles">Measles (9 mos.)</option>
                                                <option value="a">Vitamin A (start at 6 mos.)</option>
                                                <option value="deworming">Deworming</option>
                                                <option value="dental">Dental Checkup</option>
                                            </select>
											@if ( $errors->has('services') )
											<span class="help-block">{{ $errors->first('services') }}</span>
											@endif
										</div>
									</div>
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
