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
Route::get('/daftar', 'AuthController@form');
Route::post('/buatAkun', 'AuthController@buatAkun');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:admin']], function() {
  
  Route::get('/','SurveyController@index');

  Route::get('/instansi','InstansiController@instansi');
  Route::post('/instansi/create_instansi','InstansiController@create_instansi');
  Route::get('/instansi/{id}/edit_instansi','InstansiController@edit_instansi');
  Route::post('/instansi/{id}/update_instansi','InstansiController@update_instansi');
  Route::get('/instansi/{id}/delete_instansi','InstansiController@delete_instansi');

  Route::get('/instansi/layanan/{id}/create_layanan','LayananController@create_layanan');
  Route::post('/instansi/layanan/{id}/store_layanan','LayananController@store_layanan');
  Route::get('/instansi/layanan/{id}/edit_layanan','LayananController@edit_layanan');
  Route::post('/instansi/layanan/{id}/update_layanan','LayananController@update_layanan');
  Route::get('/instansi/layanan/{id}/delete_layanan','LayananController@delete_layanan');



  Route::get('/questionnaires/create','QuestionnaireController@create');
  Route::post('/questionnaires','QuestionnaireController@store');
  Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');

  Route::get('/questionnaires/{questionnaire}/questions/create','QuestionController@create');
  Route::post('/questionnaires/{questionnaire}/questions','QuestionController@store');
  Route::delete('/questionnaires/{questionnaire}/questions/{question}','QuestionController@destroy');

  Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show');
  Route::post('/surveys/{questionnaire}-{slug}','SurveyController@store');

});


Route::group(['middleware' => ['auth','checkRole:admin,pengguna']], function() {
  Route::get('/homeUser','Controller@homeUser');
});
