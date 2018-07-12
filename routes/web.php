<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

//Route for doctor login

Route::get('/doctor/login', 'Doctor\LoginController@showLoginForm')->name('doctor.login');

Route::post('/doctor/login', 'Doctor\LoginController@login')->name('doctor.login');

Route::get('/home', 'HomeController@index')->name('home');

//Staff routes

Route::resource('staff', 'StaffController');

Route::resource('patient', 'PatientController');

Route::resource('doctor', 'DoctorController');

Route::get('doc/dashboard', 'DoctorController@showDashboard')->name('doctor.dashboard');

Route::get('doctor/{id}/patientList', 'DoctorController@getPatients')->name('doctor.list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

