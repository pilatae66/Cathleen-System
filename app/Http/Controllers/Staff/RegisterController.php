<?php

namespace App\Http\Controllers\Staff;

use App\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'staffFname' => 'required|string|max:255',
            'staffLname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'contactNumber' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:staff',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Staff
     */
    protected function create(array $data)
    {
        return Staff::create([
            'staffFname' => $data['staffFname'],
            'staffLname' => $data['staffLname'],
            'position' => $data['position'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'contactNumber' => $data['contactNumber'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
