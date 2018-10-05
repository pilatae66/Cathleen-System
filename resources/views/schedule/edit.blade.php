@extends('layouts.app')
@section('title')
Schedule Edit
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#"><i class="fa fa-dashboard"></i> Schedule</a></li>
<li class="active">Edit</li>
@endsection
@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border"><h4 class="card-title">Schedule Edit for {{ $schedule->patient->fullName }}</h4> </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('schedule.update', $schedule->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group {{ $errors->first('schedule_date') ? "has-error" : "" }}">
                                    <label for="schedule_date">Schedule Date</label>
                                    <input type="text" value="{{ $schedule->schedule_date }}" name="schedule_date" class="form-control datepicker" id="schedule_date" placeholder="Enter Schedule Date">
                                    @if ($errors->first('schedule_date'))
                                    <small class="help-block">{{ $errors->first('schedule_date') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group {{ $errors->first('service') ? "has-error" : "" }}">
                                    <label for="service">Scheduled Service</label>
                                    <input type="text" value="{{ $schedule->service }}" name="service" class="form-control" id="service" style="border-radius:5px" placeholder="Enter Scheduled Service">
                                    @if ($errors->first('service'))
                                    <small class="help-block">{{ $errors->first('service') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3"><br>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
