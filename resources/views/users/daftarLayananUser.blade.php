@extends('layouts.masterUser')
@section('contentUser')
  <h1>Daftar Layanan.</h1>

  <ol>
    @for($i=1; $i <= 3; $i++)
    <li>
      <a href="/daftarSurveyLayananUser">{{'Layanan '.$i}}</a>
    </li>
    @endfor
  </ol>
@endsection
