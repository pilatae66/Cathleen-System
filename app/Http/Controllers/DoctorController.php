<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\HealthRecord;
use Auth;
use Illuminate\Http\Request;
use App\AdultPatient;
use App\ChildPatient;
use App\PatientRequest;
use App\PrenatalCare;
use App\Immunization;

class DoctorController extends Controller
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
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function getPatients()
    {
        $patientList = Patient::select(['id','firstname','middlename','lastname','patient_type'])->get();
        foreach ($patientList as $key => $value) {
            $list = PatientRequest::where('patient_id', $value->id)->count();
            $value->count = $list;
            
        }
        // return $patientList;
        return view('doctor.index', compact('patientList'));
    }

    public function showDashboard()
    {
        return view('doctor.dashboard');
    }

    public function showPatient($id)
    {
        $records = HealthRecord::where('patientID', $id)->get();
        $patient = Patient::where('id', $id)->first();

        return view('doctor.show', compact('patient', 'records'));
    }

    public function getPatientRequest($patient){
        $pat = Patient::find($patient);
        $patient_requests = PatientRequest::where('patient_id', $patient)->get();

        return view('doctor.getPatientRequest', compact('patient_requests', 'pat'));
    }

    public function checkUp($id)
    {
        $patient_request = PatientRequest::find($id);
        $patient_request->status = 1;
        $patient_request->save();

        return redirect()->route('doctor.requestList', $patient_request->patient_id);
    }

    public function showRecord($id)
    {
        $prenatal = PrenatalCare::find($id);
        return view('doctor.showRecord', compact('prenatal'));
    }

    public function showRecordImm($id)
    {
        $immune = Immunization::find($id);
        return view('doctor.showRecordImm', compact('immune'));
    }
}
