@extends('layouts.masterUser')
@section('contentUser')
<style media="screen">
  body{
    background-image: url('images/girl.jpg');
  }

</style>

  <h1>Daftar Layanan.</h1>

  <ol>
    @for($i=1; $i <= 3; $i++)
    <li>
      <a href="/daftarSurveyLayananUser">{{'Layanan '.$i}}</a>
    </li>
    @endfor
  </ol>
@endsection
