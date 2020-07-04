@extends('layouts.master')
@section('content')
<h2>Form Tambah Instansi</h2>
<form>
  <p>Pilih Instansi
  	  <select name='instansi'>
  		<option value='Instansi A'>Instansi A</option>
  		<option value='Instansi A'>Instansi B</option>
  		<option value='Instansi A'>Instansi C</option>
  		<option value='Instansi A'>Instansi D</option>
  		<option value='Instansi A'>Instansi E</option>
  	  </select>
  </p>

  <p>Pilih Layanan
      <select name='layanan'>
      <option value='Layanan A'>Layanan A</option>
      <option value='Layanan A'>Layanan B</option>
      <option value='Layanan A'>Layanan C</option>
      <option value='Layanan A'>Layanan D</option>
      <option value='Layanan A'>Layanan E</option>
      </select>
  </p>
      <!-- <input type='submit' name='tombol' value='next'/> -->
      <button type="button" name="button"><a href="{{ url('detailSurvey') }}">Next</a> </button>
</form>
@endsection
