@extends('layouts.master')
@section('content')
<h2>Form Tambah Instansi</h2>
<form>
<div class="form-group">
    <label>Nama Instansi</label>
    <input type="text" name="" class="form-control" placeholder="Masukkan Nama Instansi">
</div>

<div class="form-group">
    <label>Kepala Dinas</label>
    <input type="text" name="" class="form-control" placeholder="Masukkan Nama Kepala Dinas">
</div>

<button type="submit" class="btn btn-primary">SIMPAN</button>
<button type="reset" class="btn btn-danger">RESET</button>
</form>
@endsection
