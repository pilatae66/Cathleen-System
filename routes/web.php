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

Route::get('doctors/patientList', 'DoctorController@getPatients')->name('doctor.list');

Route::get('doctors/patientList/{patient}/requestList', 'DoctorController@getPatientRequest')->name('doctor.requestList');

Route::get('doctor/{id}/patientProfile', 'DoctorController@showPatient')->name('doctor.showPatient');

Route::get('/home', 'HomeController@index')->name('home');

//Staff routes

Route::get('staff/login', 'Staff\LoginController@showLoginForm')->name('staff.login');

Route::get('staff/dashboard', 'StaffController@showDashboard')->name('staff.dashboard');

Route::post('staff/login', 'Staff\LoginController@login')->name('staff.login');

Route::resource('staff', 'StaffController');

Route::get('staffs/{id}/patient', 'StaffController@showPatient')->name('staff.showPatient');

Route::get('staffs/patients', 'StaffController@getPatients')->name('staff.getPatients');

Route::get('staff/patients/create', 'StaffController@addRecord')->name('staff.addRecord');

Route::get('staff/patients/{patient}/getSchedule', 'StaffController@getSchedule')->name('staff.setSchedule');

Route::post('staff/patients/{patient}/postSchedule', 'StaffController@postSchedule')->name('staff.postSchedule');


Route::get('/home', 'HomeController@index')->name('home');

//Health Record Routes

Route::resource('healthRecord', 'HealthRecordController');

Route::get('patient/{id}/showRecord', 'DoctorController@showRecord')->name('record.show');

Route::get('patient/{id}/showRecordImm', 'DoctorController@showRecordImm')->name('record.showImmune');

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

Route::post('patient/adult/', 'StaffController@storeAdult')->name('staff.storeAdult');

Route::get('patient/child/create', 'StaffController@registerChild')->name('staff.registerChild');

Route::post('patient/child/', 'StaffController@storeChild')->name('staff.storeChild');

Route::get('patient/child/sibling', 'SiblingController@create')->name('sibling.create');

Route::post('patient/child/sibling', 'SiblingController@store')->name('sibling.store');

Route::get('patient/{id}/request', 'StaffController@request')->name('patient.request');

Route::get('patient/{id}/request/{request}', 'StaffController@postRequest')->name('patient.postRequest');

Route::get('doctor/{id}/checkup', 'DoctorController@checkUp')->name('patient.checkUp');

Route::get('doctor/{id}/request/maternity/{request}', 'MaternityController@createMaternity')->name('request.createMaternity');

Route::post('doctor/{id}/request/maternity', 'MaternityController@postMaternity')->name('request.postMaternity');

Route::get('doctor/{id}/request/prenatal/{request}', 'RequestController@createPrenatal')->name('request.createPrenatal');

Route::post('doctor/{id}/request/prenatal', 'RequestController@storePrenatal')->name('request.storePrenatal');

Route::get('doctor/{id}/request/prenatalCare/{request}', 'PrenatalCareController@createPrenatalCare')->name('request.createPrenatal');

Route::post('doctor/{id}/request/prenatalCare/', 'PrenatalCareController@postPrenatalCare')->name('request.postPrenatal');

Route::get('doctor/{id}/request/{request}/immunization/', 'ImmunizationController@createImmunization')->name('request.createImmunization');

Route::post('doctor/{id}/request/immunization', 'ImmunizationController@postImmunization')->name('request.postImmunization');

Route::resource('schedule', 'ScheduleController');
