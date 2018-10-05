<?php

namespace App\Http\Controllers;

use App\PrenatalCare;
use Illuminate\Http\Request;
use App\AdultPatient;
use App\ChildPatient;
use App\PatientRequest;
use Carbon\Carbon;
use App\Notifications\ScheduleNotification;
use App\Schedule;
use App\Patient;

class PrenatalCareController extends Controller
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
     * @param  \App\PrenatalCare  $prenatalCare
     * @return \Illuminate\Http\Response
     */
    public function show(PrenatalCare $prenatalCare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrenatalCare  $prenatalCare
     * @return \Illuminate\Http\Response
     */
    public function edit(PrenatalCare $prenatalCare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrenatalCare  $prenatalCare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrenatalCare $prenatalCare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrenatalCare  $prenatalCare
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrenatalCare $prenatalCare)
    {
        //
    }

    public function createPrenatalCare($id, $request){
        $patient = Patient::find($id);
        return view('request.prenatal_care',compact('id','request', 'patient'));
    }

    public function postPrenatalCare($id, Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'client_number' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'blood_pressure' => 'required',
            'temperature' => 'required',
            'weight' => 'required|numeric',
            'breast' => 'required',
            'heart' => 'required',
            'pelvis' => 'required',
            'urinary' => 'required',
            'assessment' => 'required|string',
            'plans' => 'required|string'
        ]);

        $prenatalCare = new PrenatalCare;
        $prenatalCare->client_name = $request->name;
        $prenatalCare->client_number = $request->client_number;
        $prenatalCare->date = $request->date;
        $prenatalCare->time = Carbon::parse($request->time);
        $prenatalCare->blood_pressure = $request->blood_pressure;
        $prenatalCare->temperature = $request->temperature;
        $prenatalCare->weight = $request->weight;
        $prenatalCare->breast = $request->breast;
        $prenatalCare->chest = $request->heart;
        $prenatalCare->pelvic = $request->pelvis;
        $prenatalCare->urinary_tract = $request->urinary;
        $prenatalCare->assessment = $request->assessment;
        $prenatalCare->referal = $request->plans;
        $prenatalCare->patient_id = $id;
        $prenatalCare->save();

        $patient_request = PatientRequest::find($request->request_id);
        $patient_request->status = 1;
        $patient_request->save();

        $adult = Patient::find($id);

        $schedule = new Schedule;
        $schedule->schedule_date = Carbon::now()->addDays(30);
        $schedule->patient_id = $id;
        $schedule->service = 'Prenatal';
        $schedule->save();

        $message = "From Tominobo Health Center:\r\n\r\nGood Day!\r\n\r\nYou're schedule for your next prenatal is on ". $schedule->schedule_date->toFormattedDateString() .".\r\n\r\nFailure to attend the said schedule will be subject to cancelation.\r\n\r\nIf you want a diffirent schedule contact this number ".Auth::user()->contactNumber." and state the schedule that you want.\r\n\r\nThank you!";
        $adult->notify(new ScheduleNotification($message));

        return redirect()->route('doctor.requestList', $id);
    }
}
