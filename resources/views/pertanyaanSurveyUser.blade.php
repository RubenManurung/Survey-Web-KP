@extends('layouts.masterUser')
@section('contentUser')
  <h1>Survey (Nama Instansi).</h1>

  <form class="" action="" method="post">
  <div class="form-check">
    <label for="">1. Pertanyaan 1.</label><br>
    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1">
    <label class="form-check-label" for="exampleRadios1">
      Sangat Baik
    </label>
    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Baik
    </label>
    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios3" value="option3">
    <label class="form-check-label" for="exampleRadios3">
      Sedang
    </label>
    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios4" value="option4">
    <label class="form-check-label" for="exampleRadios4">
      Buruk
    </label>
    <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="option5">
    <label class="form-check-label" for="exampleRadios5">
      Sangat Buruk
    </label><br>
    <label for="">2. Pertanyaan 2.</label><br>
    <input class="form-check-input" type="radio" name="Ya" id="Ya" value="Ya">
    <label class="form-check-label" for="Ya">
      Ya
    </label><br>
    <input class="form-check-input" type="radio" name="Tidak" id="Tidak" value="Tidak">
    <label class="form-check-label" for="Tidak">
      Tidak
    </label><br>
    <label for="">3. Pertanyaan 3.</label><br>
    <textarea name="name" rows="8" cols="80" placeholder="Masukkan Saran dan Komentar Anda."></textarea><br>
    <button type="button" name="button"><a href="/afterSurveyUser">Kirim</a> </button>
  </div>
  </form>
@endsection
