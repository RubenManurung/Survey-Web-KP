@extends('layouts.master')
@section('content')
<form>
  <h1>Survey Kepuasan Masyarakat</h1>
  <hr>
  <p>Pertanyaan 1.
      <select name='jenisJawaban'>
        <option value='pilGanda'>Pilihan Ganda</option>
        <option value='Essai'>Essai</option>
        <option value='yaTidak'>Ya Tidak</option>
      </select>
  </p>
  <p>Pertanyaan 2.
    <select name='jenisJawaban'>
      <option value='pilGanda'>Pilihan Ganda</option>
      <option value='Essai'>Essai</option>
      <option value='yaTidak'>Ya Tidak</option>
    </select>
  </p>
  <p>Pertanyaan 3.
    <select name='jenisJawaban'>
      <option value='pilGanda'>Pilihan Ganda</option>
      <option value='Essai'>Essai</option>
      <option value='yaTidak'>Ya Tidak</option>
    </select>
  </p>
  <p>Pertanyaan 4.
    <select name='jenisJawaban'>
      <option value='pilGanda'>Pilihan Ganda</option>
      <option value='Essai'>Essai</option>
      <option value='yaTidak'>Ya Tidak</option>
    </select>
  </p>
  <button type="button" name="button">Kirim</button>
</form>
@endsection
