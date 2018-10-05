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
                    <h3 class="box-title">Staff Dashboard</h3>
                    <div class="pull-right"><a href="{{ route('patient.create') }}" title="Register new Patient"><i class="fa fa-plus"></i></a></div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<h4>Today's Patients</h4><br>
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<td>Patient Name</td>
								<td>Scheduled Services</td>
								<td>Actions</td>
							</tr>
						</thead>
						<tbody>
							@forelse ($schedules as $schedule)
								<tr>
									<td>{{ $schedule->patient->fullName }}</td>
									<td>{{ $schedule->service }}</td>
									<td>
										<a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-primary">Edit</a>
										<form action="{{ route('schedule.destroy', $schedule->id) }}" style="display:inline-block" method="post">
											@csrf
											<input type="hidden" name="_method" value="DELETE">
											<button class="btn btn-danger btn-sm" type="submit">Delete</button>
										</form>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="2" class="text-center">No schedule today!</td>
								</tr>
							@endforelse
						</tbody>
						<tfoot>
							<tr>
								<td>Patient Name</td>
								<td>Scheduled Services</td>
								<td>Actions</td>
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
