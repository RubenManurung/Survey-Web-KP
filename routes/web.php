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
    return view('admin.hasilSurvey');
});

Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');

Route::get('/hasilSurvey','Controller@index');
Route::get('/instansi','Controller@instansi');

Route::post('/instansi/create_instansi','Controller@create_instansi');
Route::get('/instansi/{id}/edit_instansi','Controller@edit_instansi');
Route::post('/instansi/{id}/update_instansi','Controller@update_instansi');
Route::get('/instansi/{id}/delete_instansi','Controller@delete_instansi');

Route::get('/instansi/layanan/{id}/create_layanan','LayananController@create_layanan');
Route::post('/instansi/layanan/{id}/store_layanan','LayananController@store_layanan');
Route::get('/instansi/layanan/{id}/edit_layanan','LayananController@edit_layanan');
Route::post('/instansi/layanan/{id}/update_layanan','LayananController@update_layanan');
Route::get('/instansi/layanan/{id}/delete_layanan','LayananController@delete_layanan');

Route::get('/survey','Controller@survey');

Route::get('/tbhinstansi','Controller@tbhinstansi');
Route::get('/layanan','Controller@layanan');

Route::get('/ubahlayanan','Controller@ubahlayanan');

Route::get('/ubahinstansi','Controller@ubahinstansi');
Route::get('/chart','Controller@chart');
Route::get('/buatSurvey','Controller@buatSurvey');

Route::get('/detailSurvey','Controller@detailSurvey');
Route::get('/buatPertanyaan','Controller@buatPertanyaan');


//Users

Route::get('/register','Controller@register');
Route::post('/register/create_register','Controller@create_register');
Route::get('/homeUser','Controller@homeUser');

Route::get('/daftarLayananUser','Controller@daftarLayananUser');
Route::get('/daftarSurveyLayananUser','Controller@daftarSurveyLayananUser');
Route::get('/pertanyaanSurveyUser','Controller@pertanyaanSurveyUser');

Route::get('/afterSurveyUser','Controller@afterSurveyUser');
