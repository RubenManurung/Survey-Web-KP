@extends('layouts.master')
@section('content')
{{dd($dataInstansi)}}
<form action="" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="namaInstansi">Nama Layanan</label>
      <input name="nama_instansi" type="text" class="form-control" id="namaInstansi">
    </div>

    <div class="form-group">
      <label for="namaPimpinan">Keterangan Layanan</label>
      <input name="keterangan_layanan" type="text" class="form-control" id="namaPimpinan">
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Buat Layanan</button>
    </div>
  </form>
@endsection
