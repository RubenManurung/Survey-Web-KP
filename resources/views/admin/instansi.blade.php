@extends('layouts.master')
@section('content')

      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif
      <h3 class="page-title">Instansi Kabupaten Tapanuli Utara</h3>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Instansi
</button>
      <!-- <button class="btn" ><a class="btn btn-primary btn-md" href="/tbhinstansi" >Tambah Instansi</a></button> -->
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nama Instansi</th>
            <th scope="col">Kepala Dinas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Layanan</th>
            <th scope="col">Aksi</th>
          </tr>
          <thead>
            <tbody>
              <tr>
                @foreach($dataInstansi as $instansi)
                  <td>{{$instansi['nama_instansi']}}</td>
                  <td>{{$instansi['nama_pimpinan']}}</td>
                  <td>{{$instansi['alamat']}}</td>
                  <td>{{$instansi['keterangan']}}</td>
                  <td>
                    <a href="/instansi/{{$instansi['id']}}/edit_instansi"  class="btn btn-warning btn-sm">Edit</a>
                  </td>
                  <td>
                    <a href="/instansi/{{$instansi['id']}}/delete_instansi"  class="btn btn-danger btn-sm">Delete</a>
                  </td>
                  </tr>
                @endforeach
            </tbody>
          </table>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Instansi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/instansi/create_instansi" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="namaInstansi">Nama Instansi</label>
                      <input name="nama_instansi" type="text" class="form-control" id="namaInstansi">
                    </div>

                    <div class="form-group">
                      <label for="namaPimpinan">Nama Pimpinan</label>
                      <input name="nama_pimpinan" type="text" class="form-control" id="namaPimpinan">
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" name="name" rows="8" cols="80"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="keterangan">Keterangan Instansi</label>
                      <textarea name="keterangan" rows="8" cols="80"></textarea>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
