@extends('layouts.master')
@section('content')
<h1>Survey Kepuasan Masyarakat</h1>
<form>
  <table>
    <tr>
      <td>
        <label for='p1'>Nama Survey</label>
      </td>
      <td>:</td>
      <td>
        <input type="text" name="" class="form-control" placeholder="Masukkan Judul Survey"></td>
      </td>
    </tr>
    <tr>
      <td>
        <label for='p1'>Jumlah Pertanyaan</label>
      </td>
      <td>:</td>
      <td>
        <input id='p1' type="number" name="" class="form-control" placeholder="Masukkan Jumlah Pertanyaan">
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit" class="btn btn-primary"> <a href="/buatPertanyaan">Next</a> </button>
      </td>
    </tr>
  </table>
</form>
@endsection
