<?php

use GuzzleHttp\Psr7\Request;
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

//route bawaan
Route::get('/', function() {
    return "Respon ini diterima dari path / dengan metode GET";
});

Route::get('/webADM', function () {
    echo "Testing Method <br>";
    return "welcome";
});


/* Route WebController.php */
// untuk "webADM"
Route::get('/webADM/{testing}', 'App\Http\Controllers\WebController@index');
Route::put('/webADM/{id}', 'App\Http\Controllers\WebController@update');
Route::delete('/webADM/{id}', 'App\Http\Controllers\WebController@destroy');
Route::get('/webADM/edit/{id}', 'App\Http\Controllers\WebController@edit');

// untuk "form"
Route::get('/form', 'App\Http\Controllers\WebController@home');
Route::post('/form/proses', 'App\Http\Controllers\WebController@proses');


// --------------------------------------------------------------------------------------------

/* Route JobController */
// untuk "job" halaman home & about
Route::get('/job', 'App\Http\Controllers\JobController@test');
Route::get('/job/about', 'App\Http\Controllers\JobController@about');

    
// --------------------------------------------------------------------------------------------

/* Route untuk link ke SQL (42) */
// route untuk link table 
Route::get('/dbdev','App\Http\Controllers\SQLController@index');
Route::get('/dbdev/export_excel','App\Http\Controllers\SQLController@export_excel');

// Route untuk link SP (Store Procedure)
Route::get('/dbSP','App\Http\Controllers\SQLController@homeSP');
Route::get('/dbSP/run/{var}','App\Http\Controllers\SQLController@SPrun');
Route::get('/dbSP/export_excel','App\Http\Controllers\SQLController@export_excel2');
Route::get('/dbSP/save','App\Http\Controllers\SQLController@save');










