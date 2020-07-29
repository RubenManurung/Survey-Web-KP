<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class SurveyController extends Controller
{
  public function index(){
    $questionnaires = auth()->user()->questionnaires;
    return view('admin.hasilSurvey', compact('questionnaires'));
  }


  public function show(Questionnaire $questionnaire, $slug){
    $questionnaire->load('questions.answers');
    return view('users.survey.show',compact('questionnaire'));
  }

  public function store(Questionnaire $questionnaire){
    // dd(request()->all());
    $data = request()->validate([
      'responses.*.answer_id' => 'required',
      'responses.*.question_id' => 'required',
      'survey.name' => 'required',
      'survey.email' => 'required|email',
    ]);

    $survey = $questionnaire->surveys()->create($data['survey']);
    $survey->responses()->createMany($data['responses']);

    return 'Thank you!';
  }

  public function showLayanan($id){
    $layanans = \App\Layanan::all()->where("instansi_id",$id);

    return view("users.userLayanan",compact("layanans","id"));
  }


  public function showKuesioner($id, $layananId){
    $questionnaires = Questionnaire::all()->where("layanan_id",'=',$layananId);
    return view("users.userQuestionnaire",compact("questionnaires"));
  }
}
