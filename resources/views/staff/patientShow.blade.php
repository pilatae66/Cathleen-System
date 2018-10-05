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

            <h3 class="profile-username text-center">{{ $patient->fullName }}</h3>

            <p class="text-muted text-center">{{ $patient->gender }}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Contact Number:</b><br>&nbsp; <a class="">{{ $patient->contact_number }}</a>
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
            <div class="box-header">
                <h5 class="box-title">Health Records</h5>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    
                   @if ($patient->patient_type == 'Child')
                   <thead>
                        <tr>
                            <th>Services</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Services</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($patient->immunization as $immune)
                            <tr>
                                <td>{{ strtoupper($immune->services) }}</td>
                                <td>{{ Carbon\Carbon::parse($immune->date_of_visit)->toFormattedDateString() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    @elseif($patient->patient_type == 'Adult')
                        <thead>
                            <tr>
                                <th>Services</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Services</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($patient->prenatal as $prenatal)
                                <tr>
                                    <td>Prenatal</td>
                                    <td>{{ Carbon\Carbon::parse($prenatal->date)->toFormattedDateString() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                   @endif
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
