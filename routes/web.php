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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/cancerForm/{id}','PatientController@createCancerform')->where('id','.*');  //create cancer form page 1
Route::get('/cancerFormp2','PatientController@createCancerformp2');                     //create cancer form page 2
Route::get('/cancerFormp3','PatientController@createCancerformp3');                     //create cancer form page 3
// injury form
Route::get('/search','PatientController@searchfilter');                                 //search for patient
Route::get('/patientlists','PatientController@index');                                  //view patient lists
Route::get('/showID/{id}','PatientController@viewencounter');                           //view patient encounter lists
Route::get('/patientShow/{id}','PatientController@show')->where('id','.*');             //show injury form with ID

Route::get('/store/{id}','PatientController@store')->where('id','.*');                  //save injury form
// Route::get('/store/{id}', function () {
//     return redirect('patients.show');
// });
Route::get('/injuryForm/{id}','PatientController@print')->where('id','.*');             //print Form
Route::get('/export','PatientController@export');                                       //export to Excel
// Route::get('users/export/', [PatientController::class, 'export']); 
// Route::get('/example','PatientController@example');             //print Form
// Route::get('/exampleCH','PatientController@exampleCH');             //print Form