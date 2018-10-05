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
    									<div class="col-md-6">
										<div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
                                            <label for="name">Client Name</label>
                                            <p>{{ $prenatal->client_name }}</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('client_number') ? 'has-error' : ''  }}">
											<label for="client_number">Client Number</label>
											<p>{{ $prenatal->client_number }}</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('date') ? 'has-error' : ''  }}">
											<label for="date">Date</label>
											<p>{{ Carbon\Carbon::parse($prenatal->date)->toFormattedDateString() }}</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('time') ? 'has-error' : ''  }}">
                                            <label for="time">Time</label>
                                            <p>{{ Carbon\Carbon::parse($prenatal->time)->format('h:i A') }}</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('blood_pressure') ? 'has-error' : ''  }}">
                                            <label for="blood_pressure">Blood Pressure</label>
                                            <p>{{ $prenatal->blood_pressure }} mmHg</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('temperature') ? 'has-error' : ''  }}">
                                            <label>Temp.____C</label>
                                            <p>{{ $prenatal->temperature }} C</p>
										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''  }}">
                                            <label for="weight">Weight___kg.</label>
                                            <p>{{ $prenatal->weight }} kg</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('breast') ? 'has-error' : ''  }}">
                                    <label for="breast">BREAST</label>
                                    <p>{{ $prenatal->breast }}</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('heart') ? 'has-error' : ''  }}">
                                    <label for="heart">HEART/CHEST</label>
                                    <p>{{ $prenatal->chest }}</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('pelvis') ? 'has-error' : ''  }}">
                                    <label for="pelvis">PELVIC EXAMINATION</label>
                                    <p>{{ $prenatal->pelvic }}</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('unrinary') ? 'has-error' : ''  }}">
                                    <label for="unrinary">Urinary Tract</label>
                                    <p>{{ strtoupper($prenatal->urinary_tract )}}</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''  }}">
                                    <label for="assessment">ASSESSMENT:</label>
                                    <p>{{ $prenatal->assessment }}</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('plans') ? 'has-error' : ''  }}">
                                    <label for="plans">PLANS( Procedure/Treatement/Referrals )</label>
                                    <p>{{ $prenatal->referal }}</p>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
@endsection
