@extends('layouts.master')
@section('content')
  <h1>Create Questionnaire</h1>
    <form class="" action="/questionnaires" method="post">
      @csrf

      <div class="form-group">
        <label for="title">Judul</label>
        <input name="title" type="text" id="title" class="form-control" placeholder="Masukkan Judul">
        <small id="titleHelp" class="form-text text-muted">Buat judul Questionnaire yang menarik.</small>

        @error('title')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="purpose">Tujuan</label>
        <input name="purpose" type="text" id="purpose" class="form-control" placeholder="Masukkan Tujuan">
        <small id="purposeHelp" class="form-text text-muted">Buat Tujuan Questionnaire yang akan meningkatkan respon.</small>

        @error('purpose')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create Questionnaire</button>
    </form>





@endsection
