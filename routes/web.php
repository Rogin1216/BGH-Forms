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

Route::resource('/patientform', PatientController::class);

Route::get('/patientlists','PatientController@index');                  //view patient lists
Route::get('/injuryForm','PatientController@create');                   //create injury form
Route::get('/cancerForm','PatientController@createCancerform');         //create cancer form
//Route::get('/patientShow/{id}','PatientController@viewencounter');
Route::get('/showID/{id}','PatientController@viewencounter');           //view patient encounter lists
Route::get('/search','PatientController@searchfilter');                 //search for patient

