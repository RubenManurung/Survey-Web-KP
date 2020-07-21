@extends('layouts.master')
@section('content')
<h1>Hasil Survey Kepuasan Masyarakat</h1>
<a href="/questionnaires/create" class="btn btn-dark">Create New Questionnaire</a>


<div class="panel">
  <div class="panel-heading">My Questionnaire</div>
  <div class="panel-body">
    <ul class="list-group">
        @foreach($questionnaires as $questionnaire)
          <li class="list-group-item">
            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
            <div class="mt-2">
              <small>Tujuan : {{ $questionnaire->purpose }}</small>
            </div>
            <div class="mt-2">
              <small> <b>Share Url</b> </small>
              <p>
                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
              </p>
            </div>

          </li>
        @endforeach
    </ul>
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
