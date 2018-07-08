@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
						@csrf

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control{{ $errors->has('staffFname') ? ' is-invalid' : '' }}" name="staffFname" value="{{ old('staffFname') }}" required autofocus>

								@if ($errors->has('staffFname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('staffFname') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

							<div class="col-md-6">
								<input id="text" type="text" class="form-control{{ $errors->has('staffLname') ? ' is-invalid' : '' }}" name="staffLname" value="{{ old('staffLname') }}" required>

								@if ($errors->has('staffLname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('staffLname') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

							<div class="col-md-6">
								<input type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required>

								@if ($errors->has('position'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('position') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

							<div class="col-md-6">
								<input type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required>

								@if ($errors->has('gender'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('gender') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

							<div class="col-md-6">
								<input type="text" class="form-control{{ $errors->has('contactNumber') ? ' is-invalid' : '' }}" name="contactNumber" value="{{ old('contactNumber') }}" required>

								@if ($errors->has('contactNumber'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('contactNumber') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

							<div class="col-md-6">
								<input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

								@if ($errors->has('address'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('address') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

							<div class="col-md-6">
								<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

								@if ($errors->has('username'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('username') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
