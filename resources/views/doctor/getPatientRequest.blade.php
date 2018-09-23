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
                       
                    </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Request Type</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($patient_requests as $request)
							<tr>
								<td><a class="text-black" href="#">{{ $request->request_type }}</a></td>
								<td><a class="text-black" href="#">{{ $request->status == 0 ? 'Pending' : 'Done' }}</a></td>
								<td>
                                    @if ($request->status == 0)
                                        @php
                                            $route = '';
                                        @endphp
                                        @switch($request->request_type)
                                            @case('Maternity')
                                                @php
													$route = route('request.createMaternity',['id' => $pat->id, 'request' => $request->id]);
                                                @endphp
                                                @break
                                            @case('Prenatal')
                                                @php
                                                    $route = route('request.createPrenatal',['id' => $pat->id, 'request' => $request->id]);
                                                @endphp
                                                @break
                                            @case('Immunization')
                                                @php
                                                    $route = route('request.createImmunization',['id' => $pat->id, 'request' => $request->id]);
                                                @endphp
                                                @break
                                            @default
                                                @php
                                                    $route = route('patient.checkUp',$request->id);
                                                @endphp
                                        @endswitch
                                        <a href="{{ $route }}" class="btn btn-sm btn-info">View</a>
                                    @else
                                        <button disabled class="btn btn-sm btn-info">Done!</button>
                                    @endif
                                </td>
							</tr>
							@empty

							@endforelse
						</tbody>
						<tfoot>
							<tr>
								<th>Request Type</th>
								<th>Status</th>
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
