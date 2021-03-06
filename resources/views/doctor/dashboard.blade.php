@extends('layouts.app')
@section('title')
Midwife Dashboard
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Patient</li>
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
				<div class="box-header with-border">
					<i class="fa fa-user-o"></i>
                    <h3 class="box-title">Midwife Dashboard</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					You are logged in as Doctor!
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
        </div>
    </div>
</section>
@endsection
