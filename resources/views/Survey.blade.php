@extends('layouts.master')
@section('content')
<button class="btn" ><a class="btn btn-primary btn-md" href="{{ url('/buatSurvey') }}" >Buat Survey</a></button>
<table class="table table-dark">
  <thead>
    <th>Nama Instansi</th>
    <th>Nama Kepala Dinas</th>
    <th>Action</th>
  </thead>
  <tbody>
    <tr>
      <td scope="row">DISKOMINFO</td>
      <td>Polmudi Sagala</td>
      <td><a href="/layanan">Hapus Survey</a></td>
    </tr>
    <tr>
      <td scope="row">Dinas Pariwisata</td>
      <td>Binhot Isak Aritonang</td>
      <td><a href="/layanan">Hapus Survey</a></td>
    </tr>
    <tr>
      <td scope="row">Dinas Usaha Kecil dan Menengah</td>
      <td>Marco Taruli Parlindungan Panggabean</td>
      <td><a href="/layanan">Hapus Survey</a></td>
    </tr>
    <tr>
      <td scope="row">Dinas Pertanian</td>
      <td>Sondang Erikson Yosua Pasaribu</td>
      <td><a href="/layanan">Hapus Survey</a></td>

    </tr>
  </tbody>
</table>
@endsection
