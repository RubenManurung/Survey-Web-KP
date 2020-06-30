<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
      return view('hasilSurvey');
    }

    public function instansi(){
      return view('instansi');
    }

    public function survey(){
      return view('survey');
    }

    public function tbhinstansi(){
      return view('tbhinstansi');
    }

    public function chart(){
      return view('chart');
    }

    public function layanan(){
      return view('layanan');
    }

    public function ubahlayanan(){
      return view('ubahlayanan');
    }

    public function ubahinstansi(){
      return view('ubahinstansi');
    }

    public function buatSurvey(){
      return view('buatSurvey');
    }

    public function detailSurvey(){
      return view('detailSurvey');
    }

    public function buatPertanyaan(){
      return view('buatPertanyaan');
    }



    public function login(){
      return view('login');
    }

    public function register(){
      return view('register');
    }

    public function homeUser(){
      return view('homeUser');
    }

    public function daftarLayananUser(){
      return view('daftarLayananUser');
    }

    public function daftarSurveyLayananUser(){
      return view('daftarSurveyLayananUser');
    }

    public function pertanyaanSurveyUser(){
      return view('pertanyaanSurveyUser');
    }

    public function afterSurveyUser(){
      return view('afterSurveyUser');
    }
}
