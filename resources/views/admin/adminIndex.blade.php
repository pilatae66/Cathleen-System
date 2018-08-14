
@extends('layouts.app')
@section('title')
Admin
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Admin</li>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Admin</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.create') }}"><i class="fa fa-plus"></i> Add Admin</a>
                    </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Admin ID</th>
								<th>Name</th>
								<th>Username</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($admins as $admin)
							<tr>
								<td>{{ $admin->id }}</td>
								<td>{{ $admin->fullName }}</td>
								<td>{{ $admin->username }}</td>
								<td>
									<a class="btn btn-info btn-sm" href="{{ route('admin.edit', $admin->id) }}"><i class="fa fa-edit"></i></a>
									<form action="{{ route('admin.destroy', $admin->id) }}" style="display:inline-block" method="post">
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
								<th>Admin ID</th>
								<th>Name</th>
								<th>Username</th>
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
