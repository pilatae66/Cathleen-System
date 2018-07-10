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
                    <div class="pull-right"><a href="{{ route('patient.create') }}" title="Register new Patient"><i class="fa fa-plus"></i></a></div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Patient Name</th>
								<th>Symptoms</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
                            @forelse ($patientList as $list)
							<tr>
                                <td><a class="text-black" href="{{ route('patient.show', $list->id) }}">{{ $list->fullName }}</a></td>
                                <td>{{ $list->symptoms }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('patient.edit', $list->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('patient.destroy', $list->id) }}" style="display:inline-block" method="post">
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
                                    <th>Symptoms</th>
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
