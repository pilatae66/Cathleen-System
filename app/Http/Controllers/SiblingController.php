<?php

namespace App\Http\Controllers;

use App\Sibling;
use Illuminate\Http\Request;

class SiblingController extends Controller
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
        return view('sibling.addSibling');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient_id = session()->get('patient');
        $sibl = new Sibling;
        $sibl->name = $request->sibling_name;
        $sibl->gender = $request->sibling_gender;
        $sibl->dob = $request->sibling_dob;
        $sibl->child_patient_id = $patient_id;
        $sibl->save();

        return redirect()->route('sibling.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function show(Sibling $sibling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function edit(Sibling $sibling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sibling $sibling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sibling $sibling)
    {
        //
    }
}
