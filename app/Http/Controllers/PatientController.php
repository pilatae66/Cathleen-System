<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use Auth;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $this->validate($request, [
            'arrival' => 'required',
            'disposition' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'philNumber' => 'required',
            'birthDate' => 'required',
            'contactNumber' => 'required',
            'occupation' => 'required',
            'educational_background' => 'required',
            'in_case_of_emergency' => 'required',
            'age' => 'required',
            'address' => 'required',
            'civilStatus' => 'required',
            'gender' => 'required',
        ]);

        $patient = new Patient;
        $patient->firstName = $request->firstname;
        $patient->middleName = $request->middlename;
        $patient->lastName = $request->lastname;
        $patient->gender = $request->gender;
        $patient->civilStatus = $request->civilStatus;
        $patient->birthDate = $request->birthDate;
        $patient->rr = $request->rr;
        $patient->bp = $request->bp;
        $patient->ht = $request->ht;
        $patient->wt = $request->wt;
        $patient->temp = $request->temp;
        $patient->age = $request->age;
        $patient->philNumber = $request->philNumber;
        $patient->contactNumber = $request->contactNumber;
        $patient->address = $request->address;
        $patient->staffID = Auth::user()->id;

        $patient->save();

        return redirect('patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $doctors = Doctor::all();

        return view('patient.edit', compact('patient', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'symptoms' => 'required|string|max:255',
            'contactNumber' => 'required|numeric',
            'address' => 'required|string|max:255',
            'docID' => 'required|numeric',
        ]);

        $patient->firstName = $request->firstname;
        $patient->middleName = $request->middlename;
        $patient->lastName = $request->lastname;
        $patient->gender = $request->gender;
        $patient->contactNumber = $request->contactNumber;
        $patient->symptoms = $request->symptoms;
        $patient->address = $request->address;
        $patient->docID = $request->docID;
        $patient->staffID = Auth::user()->id;

        $patient->save();

        return redirect('patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect('patient');
    }
}
