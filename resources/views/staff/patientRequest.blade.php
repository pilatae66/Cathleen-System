@extends('layouts.app')
@section('title')
Patient Request List
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Patient</li>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
                    <h3 class="box-title">Patient Request List</h3>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Request</button>
                            <ul class="dropdown-menu" role="menu">
								@if ($patient->patient_type == 'Adult')
									@if ($patient->adult->gender == 'Female')
										<li><a href="{{ route('patient.postRequest', ['id' => $patient->id, 'request' => 'Checkup']) }}">Checkup</a></li>
										<li><a href="{{ route('staff.setSchedule', ['id' => $patient->id, 'request' => 'Prenatal']) }}">Prenatal</a></li>
									@else
										<li><a href="#">Checkup</a></li>
									@endif
								@elseif ($patient->patient_type == 'Child')
                                    <li><a href="{{ route('patient.postRequest', ['id' => $patient->id, 'request' => 'Checkup']) }}">Checkup</a></li>
                                    <li><a href="{{ route('patient.postRequest', ['id' => $patient->id, 'request' => 'Immunization']) }}">Immunization</a></li>
                                @endif
                                {{-- <li class="divider"></li>
                                <li><a href="#">Separated link</a></li> --}}
                            </ul>
                        </div>
                    </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Request Type</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($patient_requests as $request)
							<tr>
								<td><a class="text-black" href="#">{{ $request->request_type }}</a></td>
								<td><a class="text-black" href="#">{{ $request->status == 0 ? 'Pending' : 'Done' }}</a></td>
							</tr>
							@empty

							@endforelse
						</tbody>
						<tfoot>
							<tr>
								<th>Request Type</th>
								<th>Status</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
        </div>
    </div>
</div>
@endsection
