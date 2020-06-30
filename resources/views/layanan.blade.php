@extends('layouts.master')
@section('content')
     <h2>Layanan Instansi Kabupaten Tapanuli Utara</h2>

     <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nama Layanan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>Layanan A</td>
                <td><a href="/ubahlayanan">Ubah</a></td>
            </tr>

            <tr>
                <td>Layanan B</td>
                <td><a href="/ubahlayanan">Ubah</a></td>
            </tr>
        </tbody>
     </table>
@endsection
