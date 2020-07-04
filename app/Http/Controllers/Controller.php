<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
      return view('admin.hasilSurvey');
    }

    public function instansi(){
      $dataInstansi = \App\Instansi::all();
      return view('admin.instansi',['dataInstansi'=>$dataInstansi]);
    }

    public function create_instansi(Request $request)
    {
      \App\Instansi::create($request->all());
      return redirect('/instansi')->with('sukses','Data Berhasil ditambahkan');
    }

    public function edit_instansi($id)
    {
      $instansi = \App\Instansi::find($id);
      return view('admin.editInstansi',['instansi'=>$instansi]);
    }

    public function update_instansi(Request $request, $id)
    {
      $instansi = \App\Instansi::find($id);
        $instansi->update($request->all());
      return redirect('/instansi')->with('sukses','Data Berhasil di Update.');
    }

    public function delete_instansi($id)
    {
      $instansi = \App\Instansi::find($id);
      $instansi->delete($id);
      return redirect('/instansi')->with('sukses','Data Berhasil Dihapus');
    }

    public function survey(){
      return view('admin.survey');
    }

    public function tbhinstansi(){
      return view('admin.tbhinstansi');
    }

    public function chart(){
      return view('admin.chart');
    }

    public function layanan(){
      return view('admin.layanan');
    }

    public function ubahlayanan(){
      return view('admin.ubahlayanan');
    }

    public function ubahinstansi(){
      return view('admin.ubahinstansi');
    }

    public function buatSurvey(){
      return view('admin.buatSurvey');
    }

    public function detailSurvey(){
      return view('admin.detailSurvey');
    }

    public function buatPertanyaan(){
      return view('admin.buatPertanyaan');
    }



    public function login(){
      return view('login');
    }

    public function register(){
      return view('register');
    }

    public function homeUser(){
      return view('users.homeUser');
    }

    public function daftarLayananUser(){
      return view('users.daftarLayananUser');
    }

    public function daftarSurveyLayananUser(){
      return view('users.daftarSurveyLayananUser');
    }

    public function pertanyaanSurveyUser(){
      return view('users.pertanyaanSurveyUser');
    }

    public function afterSurveyUser(){
      return view('users.afterSurveyUser');
    }



    public function create_register(Request $request)
    {
      \App\Register::create($request->all());
      return redirect('/manageUser');
    }


}
