<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontendController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('speciality/{id}','FrontendController@speciality')->name('speciality');

Route::get('doctor/{id}','FrontendController@doctor')->name('doctor');

Route::get('contact','FrontendController@contact')->name('contact');

Route::get('package','FrontendController@package')->name('package');

Route::get('appointment/{id}','FrontendController@appointment')->name('appointment');
Route::post('appoint_create','FrontendController@appoint_create')->name('appoint_create');

Route::get('success','FrontendController@success')->name('success');


//frontend

Route::post('show_doctor','PatientController@show_doctor')->name('show_doctor');

Route::resource('patient','PatientController');

//Backend
Route::group(['middleware' => 'role:admin' ,'prefix' => 'backside','as' => 'backside.'],function(){

Route::resource('/speciality','SpecialityController');

Route::resource('/disease','DiseaseController');

Route::resource('/schedule','ScheduleController');

Route::resource('/doctor','DoctorController');

Route::resource('/package','PackageController');

Route::resource('/patientinfo','PatientController');

Route::resource('/appointinfo','AppointmentController');


});





