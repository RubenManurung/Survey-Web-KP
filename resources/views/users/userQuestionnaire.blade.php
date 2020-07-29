@extends('layouts.master')
@section('content')
<br><br>

<h2> <b>Standar Kepuasan Masyarakat(SKM).</b> </h2>
<h3>Silahkan Pilih Survey.</h3>


  <table class="table table-dark">
    <thead>
      <th>No</th>
      <th>Judul Survey</th>
      <th>Tujuan Survey</th>
    </thead>
    <tbody>
      <tr>
        <?php $no=1; ?>
          @foreach($questionnaires as $questionnaire)
            <td><?= $no++; ?></td>
            <td> <a href="{{$questionnaire->publicPath()}}">{{$questionnaire['title']}}</a> </td>
            <td>{{$questionnaire['purpose']}}</td>
        </tr>
          @endforeach
    </tbody>
  </table>

@endsection
