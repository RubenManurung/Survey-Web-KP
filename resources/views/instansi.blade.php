@extends('layouts.master')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <h2>Instansi Kabupaten Tapanuli Utara</h2>
              <button class="btn" ><a class="btn btn-primary btn-md" href="/tbhinstansi" >Tambah Instansi</a></button>
              <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nama Instansi</th>
                  <th scope="col">Kepala Dinas</th>
                  <th scope="col">Layanan</th>
                  <th scope="col">Aksi</th>
                </tr>
              <thead>
              <tbody>
                <tr>
                  <td scope="row">DISKOMINFO</td>
                  <td>Polmudi Sagala</td>
                  <td><a href="/layanan">Lihat</a></td>
                  <td><a href="/ubahinstansi">Ubah</a></td>
                </tr>
                <tr>
                  <td scope="row">Dinas Pariwisata</td>
                  <td>Binhot Isak Aritonang</td>
                  <td><a href="/layanan">Lihat</a></td>
                  <td><a href="/ubahinstansi">Ubah</a></td>
                </tr>
                <tr>
                  <td scope="row">Dinas Usaha Kecil dan Menengah</td>
                  <td>Marco Taruli Parlindungan Panggabean</td>
                  <td><a href="/layanan">Lihat</a></td>
                  <td><a href="/ubahinstansi">Ubah</a></td>
                </tr>
                <tr>
                  <td scope="row">Dinas Pertanian</td>
                  <td>Sondang Erikson Yosua Pasaribu</td>
                  <td><a href="/layanan">Lihat</a></td>
                  <td><a href="/ubahinstansi">Ubah</a></td>
                </tr>
              </tbody>
            </table>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
