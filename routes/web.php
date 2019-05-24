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

// Route::get('/ajax',function() {
//    return view('ajax');
// });

// Route::post('/getmsg','AjaxController@index');

Route::get('/','Controller@index');

//fetching specialitities for speciality table
Route::get('/get/specialist/{id}','AjaxController@getSpeciality');

//fetching specialist from doctors info table
Route::get('/get/specialist/{catId}/{speciality}/{location}','AjaxController@getSpecialist');

Route::get('/Donate_organ', function () {
    return view('registerDonor');
});

Route::get('/display_donor', function () {
    return view('display_donor');
});

Route::post('/Donate_organ_entry',
	'Controller@Donate_organ_entry'
);

Route::post('/check_donor','Controller@checkDonor');

Route::get('/link',function()
{
	return view('link');
});

Route::get('/admin_layout','Controller@Admin');

Route::get('/doctor_layout','Controller@Doctor');

Route::get('/patient_layout','Controller@Patient');

Route::get('/register','Controller@patient_register');

Route::post('/patient_register_entry','Controller@patient_register_entry');

Route::post('/patient_register_entry_book','Controller@patient_register_entry_book');

Route::get('/login','Controller@loginEntry');

Route::post('/login_check','Controller@loginEntryCheck');

Route::post('/login_check/book/{id}','Controller@loginEntryCheckandBook');

Route::post('/updateTreatment/{id}','Controller@update');

Route::get('/Appointment','Controller@add_appointment');

Route::get('/View_doctor_profile','Controller@view_doctor_profile');

Route::get('/View_patient_profile','Controller@view_patient_profile');

Route::get('/treatment/{appoint_id}','Controller@treatment');

Route::get('/page/{pblm_id}','Controller@doctor_profile_appoint');

Route::get('/book/{pblm_id}','Controller@bookDoctor');

Route::get('/register/book/{id}', 'Controller@registerBook');

Route::get('/login/book/{id}', 'Controller@loginBook');

Route::get('/apply/{id}','Controller@applyOrgan');


Route::get('/doctorUpdate/{id}','Controller@doctorUpdate');

Route::get('/patientUpdate/{id}','Controller@patientUpdate');

Route::get('/delete/{id}','Controller@deleteAppointment');


Route::get('/doctor_register', 'Controller@doctorRegister');

Route::get('/page','Controller@pageDetail');

Route::get('/table','Controller@display_patient_info');

Route::get('/table_doctor','Controller@display_doctor_info');

Route::post('/do_check', 'Controller@do_check');

Route::get('/organ', function () {
    return view('organDonor_register');
});


Route::get('/Appointment', function () {
    return View::make('add_appointment');
});

Route::get('/View_Appointment','Controller@view_appointment_details');

Route::get('/view_doctor_Appointment','Controller@View_doctor_appointment_details');

Route::get('/view_all_appointment','Controller@view_all_appointment_details');

Route::get('/patientFeedback','Controller@patientFeedback');

Route::post('/add_feedback','Controller@add_patient_feedback');

Route::post('/add_article','Controller@Add_Admin_Article');

Route::get('/view_feedback','Controller@Feedback_view');

Route::get('/article_add','Controller@Add_Article');

Route::post('/update/{id}','Controller@update_details');

Route::post('/add_doctor','Controller@doctor_register_entry');


