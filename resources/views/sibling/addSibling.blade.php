@extends('layouts.app')
@section('title')
Patient
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Patient</a></li>
<li><a href="#"><i class="fa fa-user-o"></i> Child</a></li>
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
					<h3 class="box-title">Register Sibling Patient</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('sibling.store') }}" method="post">
									@csrf
									<div class="col-md-12">
										<h4 class="text-center">Brothers and Sisters</h4>
									</div>
								</div>
								<hr>
								<div class="siblings">
									<div class="sibling">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group {{ $errors->has('sibling') ? 'has-error' : ''  }}">
													<label for="sibling">Name</label>
													<input type="text" name="sibling_name" class="form-control" placeholder="Enter Sibling's Name">
													@if ( $errors->has('sibling') )
													<span class="help-block">{{ $errors->first('sibling') }}</span>
													@endif
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group {{ $errors->has('sibling_gender') ? 'has-error' : ''  }}">
													<label for="sibling_gender">Gender</label>
													<select name="sibling_gender" class="form-control">
														<option disabled hidden selected>Choose...</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
													@if ( $errors->has('sibling_gender') )
													<span class="help-block">{{ $errors->first('sibling_gender') }}</span>
													@endif
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group date {{ $errors->has('siblingdob') ? 'has-error' : ''  }}">
													<label for="siblingdob">Date of Birth</label>
													<input type="text" name="sibling_dob" class="form-control" placeholder="Choose Sibling's Date of Birth">
													@if ( $errors->has('siblingdob') )
													<span class="help-block">{{ $errors->first('siblingdob') }}</span>
													@endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
						<a href="{{ route('staff.getPatients') }}" class="btn btn-primary">Next <i class="fa fa-arrow-right"></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
