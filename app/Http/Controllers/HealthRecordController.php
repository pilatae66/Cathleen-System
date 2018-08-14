<?php

namespace App\Http\Controllers;

use App\HealthRecord;
use Illuminate\Http\Request;
use App\Patient;
use Auth;
use Carbon\Carbon;

class HealthRecordController extends Controller
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
    public function create($id)
    {
        $patient = Patient::where('id', $id)->first();
        return view('healthRecord.createFromDoctor', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'diagnosis' => 'required',
            'treatment' => 'required',
            'status' => 'required',
            'patientID' => 'required'
        ]);

        $healthRecord = new HealthRecord;
        $healthRecord->diagnosis = $request->diagnosis;
        $healthRecord->treatment = $request->treatment;
        $healthRecord->status = $request->status;
        $healthRecord->patientID = $request->patientID;
        $healthRecord->doctorID = Auth::user()->id;
        $healthRecord->date = Carbon::now()->format('Y-m-d');

        // return Carbon::now()->format('Y-m-d');
        $healthRecord->save();

        return redirect()->route('doctor.showPatient', $request->patientID);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthRecord  $healthRecord
     * @return \Illuminate\Http\Response
     */
    public function show(HealthRecord $healthRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthRecord  $healthRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthRecord $healthRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthRecord  $healthRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthRecord $healthRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthRecord  $healthRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthRecord $healthRecord)
    {
        //
    }
}
