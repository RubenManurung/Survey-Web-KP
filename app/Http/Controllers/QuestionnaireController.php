<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function create(){
      $instansi = \App\Instansi::all();
      return view('admin.questionnaire.create',compact('instansi'));
    }

    public function store(Request $request){
      $data = $request->validate([
        'title' => 'required',
        'purpose' => 'required',
      ]);

      $questionnaire = auth()->user()->questionnaires()->create($data);

      return redirect('/questionnaires/'.$questionnaire->id);
    }


    public function show(\App\Questionnaire $questionnaire){
      //Lazy Loaded
      $questionnaire->load('questions.answers.responses');



      return view('admin.questionnaire.show',compact('questionnaire'));
    }
}
