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
					<h3 class="box-title">Register Child Patient</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<form action="{{ route('staff.storeChild') }}" method="post">
									@csrf
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('arrival') ? 'has-error' : ''  }}">
											<label for="arrival">Date of Arrival</label>
											<input type="text" name="arrival" id="arrival" class="form-control datepicker" placeholder="Choose Date of Arrival">
											@if ( $errors->has('arrival') )
											<span class="help-block">{{ $errors->first('arrival') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('disposition') ? 'has-error' : ''  }}">
											<label for="disposition">Time of Disposition</label>
											<input type="text" name="disposition" class="form-control timepicker" placeholder="Choose Time">
											@if ( $errors->has('disposition') )
											<span class="help-block">{{ $errors->first('disposition') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('child_no') ? 'has-error' : ''  }}">
											<label for="child_no">Child no</label>
											<input type="text" name="child_no" id="child_no" class="form-control" placeholder="Enter the position of the child">
											@if ( $errors->has('child_no') )
											<span class="help-block">{{ $errors->first('child_no') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''  }}">
											<label for="firstname">Firstname</label>
											<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
											@if ( $errors->has('firstname') )
											<span class="help-block">{{ $errors->first('firstname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''  }}">
											<label for="middlename">Middlename</label>
											<input type="text" name="middlename" id="middlename" class="form-control" placeholder="Enter Middlename">
											@if ( $errors->has('middlename') )
											<span class="help-block">{{ $errors->first('middlename') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''  }}">
											<label for="lastname">Lastname</label>
											<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
											@if ( $errors->has('lastname') )
											<span class="help-block">{{ $errors->first('lastname') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''  }}">
											<label for="contact_number">Contact Number</label>
											<input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Enter Contact Number">
											@if ( $errors->has('contact_number') )
											<span class="help-block">{{ $errors->first('contact_number') }}</span>
											@endif
										</div>
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''  }}">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option disabled hidden selected>Choose gender..</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @if ( $errors->has('gender') )
                                            <span class="help-block">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('date_first_seen') ? 'has-error' : ''  }}">
                                            <label for="date_first_seen">Date First Seen</label>
                                            <input type="text" name="date_first_seen" id="date_first_seen" class="form-control datepicker" placeholder="Choose Date First Seen">
                                            @if ( $errors->has('date_first_seen') )
                                            <span class="help-block">{{ $errors->first('date_first_seen') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : ''  }}">
                                            <label for="birth_date">Birth Date</label>
                                            <input type="text" name="birth_date" id="birth_date" class="form-control datepicker" placeholder="Choose Birth Date">
                                            @if ( $errors->has('birth_date') )
                                            <span class="help-block">{{ $errors->first('birth_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('birth_weight') ? 'has-error' : ''  }}">
                                                <label for="birth_weight">Birth Weight</label>
                                                <input type="text" name="birth_weight" id="birth_weight" class="form-control" placeholder="Enter Birth Weight">
                                            @if ( $errors->has('birth_weight') )
                                            <span class="help-block">{{ $errors->first('birth_weight') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('place_of_delivery') ? 'has-error' : ''  }}">
                                            <label for="place_of_delivery">Place of Delivery</label>
                                            <input type="text" name="place_of_delivery" class="form-control" placeholder="Enter Place of Delivery">
                                            @if ( $errors->has('place_of_delivery') )
                                            <span class="help-block">{{ $errors->first('place_of_delivery') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('registry_date') ? 'has-error' : ''  }}">
                                            <label for="registry_date">Registry Date</label>
                                            <input type="text" name="registry_date" id="registry_date" class="form-control datepicker" placeholder="Choose Registry Date">
                                            @if ( $errors->has('registry_date') )
                                            <span class="help-block">{{ $errors->first('registry_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''  }}">
                                            <label for="address">Complete Address ( House No. / Street / Baranggay / City / Province / Country )</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="House No. / Street / Baranggay / City / Province / Country">
                                            @if ( $errors->has('address') )
                                            <span class="help-block">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
								<hr>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('mother') ? 'has-error' : ''  }}">
											<label>Mother's Name</label>
											<input type="text" class="form-control" name="mother" id="datepicker" placeholder="Choose Mother's Name">
											@if ( $errors->has('mother') )
											<span class="help-block">{{ $errors->first('mother') }}</span>
											@endif
										</div>
										<!-- /.form group -->
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('mother_education') ? 'has-error' : ''  }}">
											<label for="mother_education">Education Level</label>
											<input type="text" name="mother_education" id="mother_education" class="form-control" placeholder="Enter Mother's Education Level">
											@if ( $errors->has('mother_education') )
											<span class="help-block">{{ $errors->first('mother_education') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group {{ $errors->has('mother_occupation') ? 'has-error' : ''  }}">
											<label for="mother_occupation">Occupation</label>
											<input type="text" name="mother_occupation" id="mother_occupation" class="form-control" placeholder="Enter Mother's Occupation">
											@if ( $errors->has('mother_occupation') )
											<span class="help-block">{{ $errors->first('mother_occupation') }}</span>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('father') ? 'has-error' : ''  }}">
									<label>Father's Name</label>
									<input type="text" class="form-control" name="father" placeholder="Enter Father's Name">
									@if ( $errors->has('father') )
									<span class="help-block">{{ $errors->first('father') }}</span>
									@endif
								</div>
								<!-- /.form group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('father_education') ? 'has-error' : ''  }}">
									<label for="father_education">Education Level</label>
									<input type="text" name="father_education" id="father_education" class="form-control" placeholder="Enter Father's Education Level">
									@if ( $errors->has('father_education') )
									<span class="help-block">{{ $errors->first('father_education') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('father_occupation') ? 'has-error' : ''  }}">
									<label for="father_occupation">Occupation</label>
									<input type="text" name="father_occupation" id="father_occupation" class="form-control" placeholder="Enter Father's Occupation">
									@if ( $errors->has('father_occupation') )
									<span class="help-block">{{ $errors->first('father_occupation') }}</span>
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
@section('scripts')
<script>
	$(document).ready(function() {
		$('.addSibling').on('click', () => {
			sibling = $('.sibling').last().clone()
            $('.siblings').append(sibling)
			return false
		})
	})
</script>
@endsection
