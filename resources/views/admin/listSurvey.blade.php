@extends('layouts.master')
@section('content')
<h1>Daftar Survey Kepuasan Masyarakat</h1>
<a href="/questionnaires/create" class="btn btn-dark">Buat Kuesioner Baru</a>
<br><br>
@if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{ session('sukses') }}
  </div>
@endif


<div class="panel">
  <div class="panel-heading">Daftar Kuesioner</div>
  <div class="panel-body">
        @foreach($questionnaires as $key => $questionnaire)
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
            <div class="mt-2">
              <small>Instansi : {{$questionnaire->instansi->nama_instansi}}</small>
            </div>
            <div class="mt-2">
              <small>Layanan : {{ $questionnaire->layanan->nama_layanan }}</small>
            </div>
            <div class="mt-2">
              <small>Tujuan : {{ $questionnaire->purpose }}</small>
            </div>
            <div class="mt-2">
              <small> <b>Share Url</b> </small>
              <p>
                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
              </p>
            </div>
            <div class="col-md-2">
              <a href="/questionnaires/edit/{{$questionnaire->id}}" class="btn btn-warning">Edit</a>
            </div>

            <div class="form-group div-col-md-2">
              <form action="/questionnaires/{{ $questionnaire->id }}" method="post">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-md btn-danger">Hapus</button>
              </form>
            </div>
          </li>
        </ul>
      @endforeach
    </div>
</div>


<!-- <table class="table table-dark">
  <thead>
    <th>Nama Instansi</th>
    <th>Jumlah Responden</th>
    <th>Action</th>
  </thead>
  <tbody>
    @for($i = 0; $i < 5; $i++)
    <tr>
      <td>Kominfo</td>
      <td>80</td>
      <td> <a href="{{ url('/chart') }}">Lihat Grafik</a> </td>
    </tr>
    @endfor
  </tbody>
</table> -->


@endsection
