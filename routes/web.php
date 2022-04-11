<?php

use App\Http\Controllers\PatientController;
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

Route::get('/', function () {
    return view('welcome');
});


// cancer form
Route::get('/cancerForm','PatientController@createCancerform');             //create cancer form page 1
Route::get('/cancerFormp2','PatientController@createCancerformp2');         //create cancer form page 2
Route::get('/cancerFormp3','PatientController@createCancerformp3');         //create cancer form page 3
// injury form
Route::get('/search','PatientController@searchfilter');                     //search for patient
Route::get('/patientlists','PatientController@index');                      //view patient lists
Route::get('/showID/{id}','PatientController@viewencounter');               //view patient encounter lists
Route::get('/patientShow/{id}','PatientController@show')->where('id','.*'); //show injury form with ID

// Route::get('/store/{id}','PatientController@store')->where('id','.*');      //save injury form
Route::get('/store/{id}', function () {
    return redirect('patients.show');
});
Route::get('/injuryForm/{id}','PatientController@print')->where('id','.*'); //print Form

