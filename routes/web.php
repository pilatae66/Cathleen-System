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
    return redirect('staff/login');
});

Auth::routes();

//Route for doctor login

Route::get('/doctor/login', 'Doctor\LoginController@showLoginForm')->name('doctor.login');

Route::post('/doctor/login', 'Doctor\LoginController@login')->name('doctor.login');

Route::resource('doctor', 'DoctorController');

Route::get('doc/dashboard', 'DoctorController@showDashboard')->name('doctor.dashboard');

Route::get('doctor/{id}/patientList', 'DoctorController@getPatients')->name('doctor.list');

Route::get('doctor/{id}/patientProfile', 'DoctorController@showPatient')->name('doctor.showPatient');

Route::get('/home', 'HomeController@index')->name('home');

//Staff routes

Route::get('staff/login', 'Staff\LoginController@showLoginForm')->name('staff.login');

Route::post('staff/login', 'Staff\LoginController@login')->name('staff.login');

Route::resource('staff', 'StaffController');

Route::get('staffs/{id}/patient', 'StaffController@showPatient')->name('staff.showPatient');

Route::get('staffs/patients', 'StaffController@getPatients')->name('staff.getPatients');

Route::get('staff/patients/create', 'StaffController@addRecord')->name('staff.addRecord');


Route::get('/home', 'HomeController@index')->name('home');

//Health Record Routes

Route::resource('healthRecord', 'HealthRecordController');

Route::get('healthRecord/{id}/create', 'HealthRecordController@create')->name('healthRecord.create');

//Admin Routes
Route::resource('admin', 'AdminController');

Route::get('admins/login', 'Admin\LoginController@showLoginForm')->name('admins.login');

Route::post('admins/login', 'Admin\LoginController@login')->name('admins.login');

Route::get('admins/dashboard', 'AdminController@dashboard')->name('admins.dashboard');

Route::get('admins/staff', 'AdminController@staffIndex')->name('admins.staffIndex');

Route::get('admins/staff/create', 'AdminController@staffCreate')->name('admins.staffCreate');

Route::post('admins/staff', 'AdminController@staffStore')->name('admins.staffStore');

Route::get('admins/{staff}/staff/edit', 'AdminController@staffEdit')->name('admins.staffEdit');

Route::patch('admins/{staff}/staff', 'AdminController@staffUpdate')->name('admins.staffUpdate');

Route::delete('admins/{staff}/staff', 'AdminController@staffDestroy')->name('admins.staffDestroy');

Route::get('admins/midwife', 'AdminController@midwifeIndex')->name('admins.midwifeIndex');

Route::get('admins/midwife/create', 'AdminController@midwifeCreate')->name('admins.midwifeCreate');

Route::post('admins/midwife', 'AdminController@midwifeStore')->name('admins.midwifeStore');

Route::delete('admins/{doctor}/midwife', 'AdminController@midwifeDestroy')->name('admins.midwifeDestroy');

Route::get('admins/{doctor}/midwife/edit', 'AdminController@midwifeEdit')->name('admins.midwifeEdit');

Route::patch('admins/{doctor}/midwife', 'AdminController@midwifeUpdate')->name('admins.midwifeUpdate');

Route::get('admins/admin', 'AdminController@adminIndex')->name('admins.adminIndex');

//Patient Routes

Route::resource('patient', 'PatientController');

Route::get('patient/adult/create', 'StaffController@registerAdult')->name('staff.registerAdult');

Route::get('patient/child/create', 'StaffController@registerChild')->name('staff.registerChild');
