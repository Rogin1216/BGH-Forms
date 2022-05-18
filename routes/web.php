<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\CancerController;
use App\Http\Controllers\UserController;
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
Route::get('/users','UserController@index'); 

// Route::get('/login', function (){
//     return view('auth.loginform');   
// });

Route::post('/loginSuccess','UserController@loginSuccess');
// Route::post('/loginform',[UserController::class,'loginSuccess'])->name('name.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::auth();
// Route::group(['middleware' => 'auth'], function () {
// cancer injury form
Route::get('/viewCancerDraft','CancerController@viewCancerDraft');                           //view draft cancer patient lists
Route::get('/viewCancerComplete','CancerController@viewCancerComplete');                     //view complete cancer patient lists
Route::get('/cancerForm/{id}','CancerController@createCancerform')->where('id','.*');       //create cancer form page 1
Route::get('/cancerFormp2/{id}','PatientController@createCancerformp2')->where('id','.*');  //create cancer form page 2
Route::get('/cancerFormp3','PatientController@createCancerformp3');                         //create cancer form page 3
Route::get('/sampleForm/{id}','CancerController@sampleForm')->where('id','.*');                     //create cancer form page 3
// injury form
Route::get('/search','PatientController@search');                                       //search
Route::get('/searchfilter','PatientController@searchfilter');                           //search for patient
Route::get('/searchDatefilter','PatientController@searchDatefilter');                   //search for patient from date
// Route::get('/index','PatientController@index');                                         //view index
 
Route::get('/infoNext/{id}','PatientController@infoNext')->where('id','.*');                                   //view after next export
Route::get('/viewinjuryReg','PatientController@viewinjuryReg');                         //view draft patient lists
Route::get('/viewAllinjuryReg','PatientController@viewAllinjuryReg');                   //view comlete patient lists
Route::get('/archive','PatientController@archive');                                     //view archive
Route::get('/setArchive','PatientController@setArchive');                               //set to archive
Route::get('/showID/{id}','PatientController@viewencounter');                           //view patient encounter lists
Route::get('/patientShow/{id}','PatientController@show')->where('id','.*');             //show injury form with ID

Route::get('/save/{id}','PatientController@save')->where('id','.*');                  //save injury form
Route::get('/store/{id}','CancerController@store')->where('id','.*');                  //save injury form
Route::get('/saveTo/{id}','PatientController@saveTo')->where('id','.*');                //
Route::get('/injuryForm/{id}','PatientController@print')->where('id','.*');             //print Form
Route::get('/export/{id}','PatientController@export')->where('id','.*');                //export to Excel

Route::get('/exportbulk/{id}','PatientController@exportbulk')->where('id','.*');        //export bulk to Excel
Route::get('/exportAndProcedure/{id}','PatientController@exportAndProcedure');          //export bulk to Excel
// });
require __DIR__.'/auth.php'; 