<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\HealthRecord;
use Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:doctor');
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

    public function getPatients($id)
    {
        $patientList = Patient::where('docID', $id)->get();

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
}
