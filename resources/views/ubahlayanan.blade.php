@extends('layouts.master')
@section('content')
        <h2 class="alert alert-primary text-center mt-3">Form Tambah Instansi</h2>

        <form>
        <div class="form-group">
            <label>Nama Layanan</label>
            <input type="text" name="" class="form-control" placeholder="Masukkan Nama Instansi">
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
        </form>
@endsection
