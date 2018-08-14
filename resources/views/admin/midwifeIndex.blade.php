@extends('layouts.app')
@section('title')
Midwife
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Midwife</li>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Midwife</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.midwifeCreate') }}"><i class="fa fa-plus"></i> Add Midwife</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Midwife ID</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($midwives as $midwife)
                            <tr>
                                <td>{{ $midwife->id }}</td>
                                <td>{{ $midwife->fullName }}</td>
                                <td>{{ $midwife->contactNumber }}</td>
                                <td>{{ $midwife->address }}</td>
                                <td>{{ $midwife->username }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.midwifeEdit', $midwife->id) }}"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.midwifeDestroy', $midwife->id) }}" style="display:inline-block" method="post">
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
                                <th>Contact Number</th>
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
