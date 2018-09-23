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
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Patient Name</th>
								<th>Patient Type</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
                            @forelse ($patientList as $list)
							<tr>
                                <td><a class="text-black" href="{{ route('doctor.showPatient', $list->id) }}">{{ $list->firstname. " " . $list->middlename . " " . $list->lastname }}</a></td>
                                <td>{{ $list->patient_type }}</td>
                                    <td>
										<a class="btn btn-success btn-sm" href="{{ route('doctor.requestList', $list->id) }}">Request <span class="badge bg-teal">{{ $list->count }}</span></a>
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
