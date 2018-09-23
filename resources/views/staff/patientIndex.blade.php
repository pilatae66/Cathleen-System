@extends('layouts.app')
@section('title')
Patient List
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
                    <h3 class="box-title">Patient List</h3>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Register Patient</button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('staff.registerAdult') }}">Adult</a></li>
                                <li><a href="{{ route('staff.registerChild') }}">Child</a></li>
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
								<th>Patient Name</th>
								<th>Patient Type</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($patients as $patient)
							<tr>
								<td><a class="text-black" href="{{ route('staff.showPatient', $patient->id) }}">{{ $patient->firstname. " " . $patient->middlename . " " . $patient->lastname }}</a></td>
								<td>{{ $patient->patient_type }}</td>
								<td>
									<a class="btn btn-success btn-sm" href="{{ route('patient.request', $patient->id) }}">Request</a>
									<a class="btn btn-info btn-sm" href="{{ route('patient.edit', $patient->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('patient.destroy', $patient->id) }}" style="display:inline-block" method="post">
										@csrf
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
							@empty

							@endforelse
						</tbody>
						<tfoot>
							<tr>
								<th>Patient Name</th>
								<th>Patient Type</th>
								<th>Actions</th>
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
