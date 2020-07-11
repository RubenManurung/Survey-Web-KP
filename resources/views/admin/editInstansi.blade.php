@extends('layouts.master')
@section('content')

<table class="table">
  <form action="/instansi/{{$instansi['id']}}/update_instansi" method="POST">
      {{csrf_field()}}
  <tr>
    <td>
      <div class="form-group">
        <label for="namaInstansi">Nama Instansi</label>
        <input name="nama_instansi" type="text" class="form-control" id="namaInstansi" value="{{$instansi['nama_instansi']}}">
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label for="namaPimpinan">Nama Pimpinan</label>
        <input name="nama_pimpinan" type="text" class="form-control" id="namaPimpinan" value="{{$instansi['nama_pimpinan']}}">
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" name="name" rows="8" cols="80" class="form-control">{{$instansi['alamat']}}</textarea>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label for="keterangan">Keterangan Instansi</label>
        <textarea name="keterangan" rows="8" cols="80" class="form-control">{{$instansi['keterangan']}}</textarea>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit Instansi</button>
      </div>

    </td>
  </tr>
    </form>
</table>











@endsection
