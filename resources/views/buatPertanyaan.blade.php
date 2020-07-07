@extends('layouts.master')
@section('content')
<form>
  <h1>Survey Kepuasan Masyarakat</h1>
  <hr>
  <div class="form-group">
      <label>Pertanyaan 1</label>
      <input type="text" name="" class="form-control" placeholder="Masukkan Pertanyaan">
  </div>

  <div class="form-group">
    <label>Pilih Jenis jawaban</label>
    <select class="form-control"  name='JenisJawaban'>
        <option value='pilGanda'>Pilihan Ganda</option>
        <option value='Essai'>Essai</option>
        <option value='yaTidak'>Ya Tidak</option>
      </select>
  </div>

  <div class="form-group">
      <label>Pertanyaan 2</label>
      <input type="text" name="" class="form-control" placeholder="Masukkan Pertanyaan">
  </div>

  <div class="form-group">
    <label>Pilih Jenis jawaban</label>
    <select class="form-control"  name='JenisJawaban'>
        <option value='pilGanda'>Pilihan Ganda</option>
        <option value='Essai'>Essai</option>
        <option value='yaTidak'>Ya Tidak</option>
      </select>
  </div>

  <div class="form-group">
      <label>Pertanyaan 3</label>
      <input type="text" name="" class="form-control" placeholder="Masukkan Pertanyaan">
  </div>

  <div class="form-group">
    <label>Pilih Jenis jawaban</label>
    <select class="form-control"  name='JenisJawaban'>
        <option value='pilGanda'>Pilihan Ganda</option>
        <option value='Essai'>Essai</option>
        <option value='yaTidak'>Ya Tidak</option>
      </select>
  </div>

  <div class="form-group">
      <label>Pertanyaan 4</label>
      <input type="text" name="" class="form-control" placeholder="Masukkan Pertanyaan">
  </div>

  <div class="form-group">
    <label>Pilih Jenis jawaban</label>
    <select class="form-control"  name='JenisJawaban'>
        <option value='pilGanda'>Pilihan Ganda</option>
        <option value='Essai'>Essai</option>
        <option value='yaTidak'>Ya Tidak</option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">KIRIM</button>
  <button type="reset" class="btn btn-danger">RESET</button>
</form>
@endsection
