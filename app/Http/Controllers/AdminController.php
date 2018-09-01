<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Doctor;
use App\Staff;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
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
        return view('admin.create');
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
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'username' => 'string|required',
            'password' => 'string|min:6|required|confirmed'
        ]);

        // return $request;

        $admin = new Admin;
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);

        $admin->save();

        return redirect()->route('admin.adminIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $this->validate($request, [
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'username' => 'string|required',
        ]);

        // return $request;

        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->username = $request->username;

        $admin->save();

        return redirect()->route('admin.adminIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.adminIndex');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function staffIndex()
    {
        $staffs = Staff::all();
        return view('admin.staffIndex', compact('staffs'));
    }

    public function staffCreate()
    {
        return view('admin.staffCreate');
    }

    public function staffStore(Request $request)
    {
        $this->validate($request, [
            'staffFname' => 'string|required',
            'staffLname' => 'string|required',
            'contactNumber' => 'numeric|required|min:11',
            'position' => 'string|required',
            'gender' => 'string|required',
            'address' => 'string|required',
            'username' => 'string|required',
            'password' => 'string|min:6|confirmed'
        ]);
        // return $request;

        $staff = new Staff;
        $staff->staffFname = $request->staffFname;
        $staff->staffLname = $request->staffLname;
        $staff->contactNumber = $request->contactNumber;
        $staff->position = $request->position;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->username = $request->username;
        $staff->password = bcrypt($request->password);

        $staff->save();

        return redirect()->route('admin.staffIndex');
    }

    public function staffEdit(Staff $staff)
    {
        return view('admin.staffEdit', compact('staff'));
    }

    public function staffUpdate(Request $request, Staff $staff)
    {
        $this->validate($request, [
            'staffFname' => 'string|required',
            'staffLname' => 'string|required',
            'contactNumber' => 'numeric|required|min:11',
            'position' => 'string|required',
            'gender' => 'string|required',
            'address' => 'string|required',
            'username' => 'string|required',
        ]);
        // return $request;

        $staff->staffFname = $request->staffFname;
        $staff->staffLname = $request->staffLname;
        $staff->contactNumber = $request->contactNumber;
        $staff->position = $request->position;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->username = $request->username;

        $staff->save();

        return redirect()->route('admin.staffIndex');
    }

    public function midwifeIndex()
    {
        $midwives = Doctor::all();
        return view('admin.midwifeIndex', compact('midwives'));
    }

    public function staffDestroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('admin.staffIndex');
    }


    public function midwifeCreate()
    {
        return view('admin.midwifeCreate');
    }

    public function midwifeStore(Request $request)
    {
        $this->validate($request, [
            'doctorFname' => 'string|required',
            'doctorLname' => 'string|required',
            'contactNumber' => 'numeric|required|min:11',
            'address' => 'string|required',
            'username' => 'string|required',
            'password' => 'string|min:6|confirmed'
        ]);
        // return $request;

        $midwife = new Doctor;
        $midwife->doctorFname = $request->doctorFname;
        $midwife->doctorLname = $request->doctorLname;
        $midwife->contactNumber = $request->contactNumber;
        $midwife->address = $request->address;
        $midwife->username = $request->username;
        $midwife->password = bcrypt($request->password);

        $midwife->save();

        return redirect()->route('admin.midwifeIndex');
    }

    public function midwifeEdit(Doctor $doctor)
    {
        return view('admin.midwifeEdit', array('midwife' => $doctor));
    }

    public function midwifeUpdate(Request $request, Doctor $doctor)
    {
        $this->validate($request, [
            'doctorFname' => 'string|required',
            'doctorLname' => 'string|required',
            'contactNumber' => 'numeric|required|min:11',
            'address' => 'string|required',
            'username' => 'string|required',
        ]);
        // return $request;

        $doctor->doctorFname = $request->doctorFname;
        $doctor->doctorLname = $request->doctorLname;
        $doctor->contactNumber = $request->contactNumber;
        $doctor->address = $request->address;
        $doctor->username = $request->username;

        $doctor->save();

        return redirect()->route('admin.midwifeIndex');
    }

    public function midwifeDestroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('admin.midwifeIndex');
    }

    public function adminIndex()
    {
        $admins = Admin::all();

        return view('admin.adminIndex', compact('admins'));
    }


}
