@extends('layouts.master')
@section('content')
<h1>Survey Kepuasan Masyarakat</h1>
<form>
  <div class="form-group">
      <label>Nama Survey</label>
      <input type="text" name="" class="form-control" placeholder="Masukkan Nama Survey ">
  </div>

  <div class="form-group">
    <label>Masukkan Jumlah Pertanyaan</label>
    <select class="form-control"  name='Jumlah Pertanyaan'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
      </select>
  </div>

  <button class="btn"><a class="btn btn-primary btn-md" href="/buatPertanyaan" >NEXT</a></button>
  <button class="btn"><a class="btn btn-danger btn-md" href="#" >RESET</a></button>
</form>
@endsection
