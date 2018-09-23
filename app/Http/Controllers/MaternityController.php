<?php

namespace App\Http\Controllers;

use App\Maternity;
use Illuminate\Http\Request;
use App\AdultPatient;
use App\PatientRequest;

class MaternityController extends Controller
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
     * @param  \App\Maternity  $maternity
     * @return \Illuminate\Http\Response
     */
    public function show(Maternity $maternity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maternity  $maternity
     * @return \Illuminate\Http\Response
     */
    public function edit(Maternity $maternity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maternity  $maternity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maternity $maternity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maternity  $maternity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maternity $maternity)
    {
        //
    }

    public function createMaternity($id, $request){
        $patient = AdultPatient::find($id);
        return view('request.first_maternal', compact('patient','request'));
    }

    public function postMaternity($id, Request $request){
        $this->validate($request, [
            'blood_pressure' => 'required',
            'pulse_rate' => 'required',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'temperature' => 'required|numeric',
            'conjunctiva' => 'required',
            'neck' => 'required',
            'breast' => 'required',
            'heart' => 'required',
            'pelvic' => 'required',
            'immune' => 'required',
            'assessment' => 'required',
            'referal' => 'required|string',
            'return_visit' => 'required'
        ]);

        $maternity = new Maternity;
        $maternity->patient_id = $id;
        $maternity->blood_pressure = $request->blood_pressure;
        $maternity->pulse_rate = $request->pulse_rate;
        $maternity->weight = $request->weight;
        $maternity->height = $request->height;
        $maternity->temperature = $request->temperature;
        $maternity->conjunctiva = $request->conjunctiva;
        $maternity->neck = $request->neck;
        $maternity->breast = $request->breast;
        $maternity->heart_and_lungs = $request->heart;
        $maternity->pelvic = $request->pelvic;
        $maternity->immunization = $request->immune;
        $maternity->assessment = $request->assessment;
        $maternity->referal = $request->referal;
        $maternity->return_visit = $request->return_visit;
        $maternity->save();
        
        $patient_request = PatientRequest::find($request->request_id);
        $patient_request->status = 1;
        $patient_request->save();

        return redirect()->route('doctor.requestList', $id);
    }
}
