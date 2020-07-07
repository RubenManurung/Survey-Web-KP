@extends('layouts.masterUser')
@section('contentUser')

  <h2> <b>Standar Kepuasan Masyarakat(SKM)</b> </h2>
  <h1>Silahkan Pilih Instansi untuk melakukan Survey.</h1>

  <form>
    <p class="p">Pilih Instansi
    	  <select class="form-control" name='instansi'>
    		<option value='Instansi A'>Instansi A</option>
    		<option value='Instansi A'>Instansi B</option>
    		<option value='Instansi A'>Instansi C</option>
    		<option value='Instansi A'>Instansi D</option>
    		<option value='Instansi A'>Instansi E</option>
    	  </select>
    </p>
        <!-- <input type='submit' name='tombol' value='next'/> -->
        <button class="btn btn-default" type="button" name="button"><a href="{{ url('/daftarLayananUser') }}">Next</a> </button>
  </form>
@endsection
