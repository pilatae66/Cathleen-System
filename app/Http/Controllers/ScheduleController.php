<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use App\Patient;
use App\Notifications\ScheduleNotification;
use Carbon\Carbon;
use Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->schedule_date = $request->schedule_date;
        $schedule->service = $request->service;
        $schedule->save();

        $patient = Patient::find($schedule->patient_id);
        $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nYour new schedule is on ". Carbon::parse($request->schedule_date)->toFormattedDateString() .".\r\n\r\nFailure to attend the said schedule will be subject to cancelation.\r\n\r\nIf you want a diffirent schedule contact this number ".Auth::user()->contactNumber." and find ". Auth::user()->fullName .".\r\n\r\nThank you!";
        $patient->notify(new ScheduleNotification($message));

        return redirect()->route('staff.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $patient = Patient::find($schedule->patient_id);
        $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nYour schedule on ". Carbon::parse($schedule->schedule_date)->toFormattedDateString() ." has been canceled by ". Auth::user()->fullName .".\r\n\r\nIf you did not initiate this cancelation please contact this number ".Auth::user()->contactNumber.".\r\n\r\nThank you!";
        $schedule->delete();
        $patient->notify(new ScheduleNotification($message));

        return redirect()->route('staff.dashboard');
    }
}
