@extends('layouts.masterUser')
@section('contentUser')
  <h1>Daftar Survey.</h1>

  <ol>
    @for($i=1; $i <= 3; $i++)
    <li>
      <a href="{{ url('/pertanyaanSurveyUser') }}">{{'Survey '.$i}}</a>
    </li>
    @endfor
  </ol>
@endsection
