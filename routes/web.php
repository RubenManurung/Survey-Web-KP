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

Route::get('/', function () {
    return view('layouts/master');
});

Route::get('/hasilSurvey','Controller@index');
Route::get('/instansi','Controller@instansi');
Route::get('/survey','Controller@survey');
Route::get('/tbhinstansi','Controller@tbhinstansi');
Route::get('/layanan','Controller@layanan');
Route::get('/ubahlayanan','Controller@ubahlayanan');
Route::get('/ubahinstansi','Controller@ubahinstansi');
