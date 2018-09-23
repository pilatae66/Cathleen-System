<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Patient;
use Illuminate\Http\Request;
use App\AdultPatient;
use Carbon\Carbon;
use App\ChildPatient;
use App\Sibling;
use App\Maternity;
use App\PrenatalCare;
use App\PatientRequest;
use App\Schedule;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'address' => 'required',
            'username' => 'required',
            'password' => 'required|required_with:password_confirmation|string|confirmed',
        ]);

        $staff = new Staff;
        $staff->staffFname = $request->firstname;
        $staff->staffLname = $request->lastname;
        $staff->gender = $request->gender;
        $staff->position = $request->position;
        $staff->contactNumber = $request->contactNumber;
        $staff->address = $request->address;
        $staff->username = $request->username;
        $staff->password = $request->password;

        $staff->save();

        return redirect('staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'address' => 'required',
        ]);

        $staff->staffFname = $request->firstname;
        $staff->staffLname = $request->lastname;
        $staff->gender = $request->gender;
        $staff->position = $request->position;
        $staff->contactNumber = $request->contactNumber;
        $staff->address = $request->address;

        $staff->save();

        return redirect('staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect('staff');
    }

    public function registerAdult()
    {
        return view('patient.createAdult');
    }

    /**
     * TODO:
     * -*-Store adult patient into database (done)
     */
    public function storeAdult(Request $request)
    {
        $this->validate($request, [
            'arrival' => 'required',
            'disposition' => 'required',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'dob' => 'required',
            'contact_number' => 'required|numeric',
            'occupation' => 'required|string',
            'educational_background' => 'required|string',
            'in_case_of_emergency' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required|string',
            'civil_status' => 'required|string',
            'address' => 'required|string',
        ]);
        

        $patient = new Patient;
        $patient->firstname = $request->firstname;
        $patient->middlename = $request->middlename != null ? $request->middlename : '';
        $patient->lastname = $request->lastname;
        $patient->contact_number = $request->contact_number;
        $patient->patient_type = 'Adult';
        $patient->save();

        $adult = new AdultPatient;
        $adult->patient_id = $patient->id;
        $adult->arrival = $request->arrival;
        $adult->disposition = Carbon::parse($request->disposition);
        $adult->dob = $request->dob;
        $adult->occupation = $request->occupation;
        $adult->educational_background = $request->educational_background;
        $adult->in_case_of_emergency = $request->in_case_of_emergency;
        $adult->age = $request->age;
        $adult->gender = $request->gender;
        $adult->civil_status = $request->civil_status;
        $adult->address = $request->address;
        $adult->save();

        return redirect()->route('staff.getPatients');
    }

    public function registerChild()
    {
        return view('patient.createChild');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * * TODO:
     * -*-Store child patient into database
     * FIXME:
     * -*-Store siblings does not populate into an array 
     */
    public function storeChild(Request $request)
    {
        $this->validate($request, [
            'arrival' => 'required',
            'disposition' => 'required',
            'child_no' => 'required|numeric',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required',
            'date_first_seen' => 'required',
            'birth_date' => 'required',
            'birth_weight' => 'required|numeric',
            'place_of_delivery' => 'required|string',
            'registry_date' => 'required',
            'address' => 'required|string',
            'mother' => 'required|string',
            'mother_education' => 'required|string',
            'mother_occupation' => 'required|string',
            'father' => 'required|string',
            'father_education' => 'required|string',
            'father_occupation' => 'required|string',
        ]);
        // return $request->all();

        $patient = new Patient;
        $patient->firstname = $request->firstname;
        $patient->middlename = $request->middlename != null ? $request->middlename : '';
        $patient->lastname = $request->lastname;
        $patient->contact_number = $request->contact_number;
        $patient->patient_type = 'Child';
        $patient->save();

        $child = new ChildPatient;
        $child->patient_id = $patient->id;
        $child->arrival = $request->arrival;
        $child->disposition = Carbon::parse($request->disposition);
        $child->child_no = $request->child_no;
        $child->gender = $request->gender;
        $child->date_first_seen = $request->date_first_seen;
        $child->dob = $request->birth_date;
        $child->birth_weight = $request->birth_weight;
        $child->place_of_delivery = $request->place_of_delivery;
        $child->registry_date = $request->registry_date;
        $child->address = $request->address;
        $child->mother_name = $request->mother;
        $child->mother_educational_level = $request->mother_education;
        $child->mother_occupation = $request->mother_occupation;
        $child->father_name = $request->father;
        $child->father_educational_level = $request->father_education;
        $child->father_occupation = $request->father_occupation;
        $child->save();

        session()->put('patient', $patient->id);
        return redirect()->route('sibling.create');
    }

    public function showDashboard()
    {
        $schedules = Schedule::where('schedule_date', Carbon::now()->toDateString())->get();
        // return $schedules;
        return view('staff.dashboard', compact('schedules'));
    }

    public function showPatient($id)
    {
        $patient = Patient::find($id);

        return view('staff.patientShow', compact('patient'));
    }

    public function getPatients()
    {
        $patients = Patient::all();

        return view('staff.patientIndex', compact('patients'));
    }

    public function addRecord()
    {
        return view('staff.addRecord');
    }

    public function request($id)
    {
        $patient = Patient::where('id', $id)->first();
        $patient_requests = PatientRequest::where('patient_id', $id)->get();
        // return $patient;
        return view('staff.patientRequest', compact('patient_requests','patient'));
    }

    public function postRequest($id, $request){
        $patient_request = new PatientRequest;
        $patient_request->request_type = $request;
        $patient_request->patient_id = $id;
        $patient_request->status = 0;
        $patient_request->save();

        return redirect()->route('patient.request', $id);
    }
}
