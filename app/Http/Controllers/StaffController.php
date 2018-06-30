<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
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
}
