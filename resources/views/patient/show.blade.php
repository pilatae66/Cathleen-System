@extends('layouts.app')
@section('title')
{{ $patient->fullName }} Profile
@endsection
@section('breadcrumb')
<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">{{ $patient->fullName }} Profile</li>
@endsection
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/CCS.png') }}" alt="User profile picture">

            <h3 class="profile-username text-center">{{ $patient->fullName }}</h3>

            <p class="text-muted text-center">{{ $patient->gender }}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Contact Number:</b><br>&nbsp; <a class="">+63{{ $patient->contactNumber }}</a>
              </li>
              <li class="list-group-item">
                <b>Address:</b><br>&nbsp; <a class="">{{ $patient->address }}</a>
              </li>
              <li class="list-group-item">
                <b>Symptoms:</b><br>&nbsp; <a class="">{{ $patient->symptoms }}</a>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Diagnosis</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Doctor</th>
                            <th>Diagnosis</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    {{-- <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody> --}}
                </table>
            </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
@endsection
