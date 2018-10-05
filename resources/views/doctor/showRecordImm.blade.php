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
									<div class="col-md-12">
										<div class="form-group {{ $errors->has('date_visit') ? 'has-error' : ''  }}">
                                            <label for="date_visit">Date of visit</label>
                                            <p>{{ $immune->date_of_visit }}</p>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group {{ $errors->has('services') ? 'has-error' : ''  }}">
                                            <label for="services">Essential Health and Nutrition Services</label>
                                            <p>{{ strtoupper($immune->services) }}</p>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
