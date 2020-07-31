@extends('layouts.master')
@section('content')
<br><br>

<h2>Layanan

</h2>
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
            <?php
            $questionnaire->load("surveys");
             ?>

            <!-- @if($questionnaire->surveys()->where('name',auth()->user()->name)->first()->name == auth()->user()->name) -->
            <td> <a href="{{$questionnaire->publicPath()}}">{{$questionnaire['title']}}</a> </td>
              <!-- <td> <a href="{{$questionnaire->publicPath()}}" class="btn disabled">{{$questionnaire['title']}}</a> </td>
            @else

            @endif -->
            <td>{{$questionnaire['purpose']}}</td>
        </tr>
          @endforeach
    </tbody>
  </table>

@endsection
