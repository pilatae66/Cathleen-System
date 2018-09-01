@extends('layouts.app')
@section('title')
Staff
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Staff</li>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Staff</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admins.staffCreate') }}"><i class="fa fa-plus"></i> Add Staff</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Position</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($staffs as $staff)
                            <tr>
                                <td>{{ $staff->id }}</td>
                                <td>{{ $staff->fullName }}</td>
                                <td>{{ $staff->contactNumber }}</td>
                                <td>{{ $staff->position }}</td>
                                <td>{{ $staff->gender }}</td>
                                <td>{{ $staff->address }}</td>
                                <td>{{ $staff->username }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('admins.staffEdit', $staff->id) }}"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admins.staffDestroy', $staff->id) }}" style="display:inline-block" method="post">
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
                                <th>Staff ID</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Position</th>
                                <th>Gender</th>
                                <th>Address</th>
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
