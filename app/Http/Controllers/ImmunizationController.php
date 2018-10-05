<?php

namespace App\Http\Controllers;

use App\Immunization;
use Illuminate\Http\Request;
use App\PatientRequest;
use Carbon\Carbon;
use App\Patient;
use App\Schedule;
use App\Notifications\ScheduleNotification;

class ImmunizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }
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
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function show(Immunization $immunization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function edit(Immunization $immunization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immunization $immunization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immunization $immunization)
    {
        //
    }

    public function createImmunization($id, $request){
        return view('request.immunization', compact('id', 'request'));
    }

    public function postImmunization($id,Request $request){
        $this->validate($request, [
            'date_visit' => 'required',
            'services' => 'required'
        ]);
        // return $id;

        $immune = new Immunization;
        $immune->date_of_visit = $request->date_visit;
        $immune->services = $request->services;
        $immune->patient_id = $id;
        $immune->save();

        $patient_request = PatientRequest::find($request->request_id);
        $patient_request->status = 1;
        $patient_request->save();

        $child = Patient::find($patient_request->patient_id);

        
        if ($immune->services == 'dpt' || $immune->services == 'opv' || $immune->services == 'hepa') {
            $immune_count = Immunization::where('patient_id', $id)->count();
            // return $immune_count;
            switch ($immune_count) {
                case 1:
                    $schedule = new Schedule;
                    $schedule->patient_id = $id;
                    $schedule->service = $request->services;
                    // return Carbon::parse($schedule)->toDateString();
                    $schedule->schedule_date = Carbon::parse($child->child->dob)->addDays(42)->toDateString();
                    $schedule->save();
                    
                    // return $message;
                    $schedule = Carbon::parse($child->child->dob)->addDays(42)->toFormattedDateString();
                    $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nThe next shot schedule for your child is on ". $schedule .".\r\n\r\nFailure to attend the said schedule will be subject to cancelation.\r\n\r\nIf you want a diffirent schedule contact this number ".Auth::user()->contactNumber." and state the schedule that you want.\r\n\r\nThank you!";
                    $child->notify(new ScheduleNotification($message));
                    break;
                
                case 2:
                    $schedule = new Schedule;
                    $schedule->patient_id = $id;
                    $schedule->service = $request->services;
                    $schedule->schedule_date = Carbon::parse($child->child->dob)->addDays(70)->toDateString();
                    $schedule->save();
                    
                    $schedule = Carbon::parse($child->child->dob)->addDays(70)->toFormattedDateString();
                    $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nThe next shot schedule for your child is on ". $schedule .".\r\n\r\nFailure to attend the said schedule will be subject to cancelation.\r\n\r\nIf you want a diffirent schedule contact this number ".Auth::user()->contactNumber." and state the schedule that you want.\r\n\r\nThank you!";
                    $child->notify(new ScheduleNotification($message));
                    break;
                
                case 3:
                    $schedule = new Schedule;
                    $schedule->patient_id = $id;
                    $schedule->service = $request->services;
                    $schedule->schedule_date = Carbon::parse($child->child->dob)->addDays(98)->toDateString();
                    $schedule->save();
                    
                    $schedule = Carbon::parse($child->child->dob)->addDays(98)->toFormattedDateString();
                    $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nThe next shot schedule for your child is on ". $schedule .".\r\n\r\nFailure to attend the said schedule will be subject to cancelation.\r\n\r\nIf you want a diffirent schedule contact this number ".Auth::user()->contactNumber." and state the schedule that you want.\r\n\r\nThank you!";
                    $child->notify(new ScheduleNotification($message));
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        return redirect()->route('doctor.requestList', $id);
    }
}
