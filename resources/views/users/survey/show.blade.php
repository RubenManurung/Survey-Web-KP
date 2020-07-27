@extends('layouts.master')
@section('content')
<div class="container">
  <h1>Selamat Datang di Website Penilaian Kominfo.</h1> <br>

  <h3>Judul Survey : {{ $questionnaire->title }}</h3>

  <form class="form-group" action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="post">
    @csrf
    <?php $no=1;?>
    @foreach($questionnaire->questions as $key => $question)
    @if($no % 2 == 0)
    <div class="row">
        <div class="col-md-4">
          <!-- PANEL SCROLLING -->
          <div id="panel-scrolling-demo" class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>{{$key + 1}}</strong>.{{ $question->question }}</h3>
            </div>
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 175px;">
                <div class="panel-body" style="overflow: hidden; width: auto; height: 175px;">
                  <ul class="list-group">
                    @foreach($question->answers as $answer)
                    <label for="answer{{ $answer->id }}">
                      <li class="list-group-item">
                        <input type="radio" name="responses[{{ $key }}][answer_id]" {{ (old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : '' }} value="{{ $answer->id }}" id="answer{{ $answer->id }}">
                        {{ $answer->answer }}

                        <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                      </li>
                    </label>
                    @endforeach
                  </ul>
                  @error('responses.'.$key.'.answer_id')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 167.35px;">
              </div>
              <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
              </div>
            </div>
          </div>
          <!-- END PANEL SCROLLING -->
        </div>
    </div>
    @elseif($no % 2 == 1)
    <div class="col-md-4">
      <!-- PANEL NO CONTROLS -->
      <div id="panel-scrolling-demo" class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>{{$key+1}}</strong>.{{ $question->question }}</h3>
        </div>
        <div class="panel-body">
          <ul class="list-group">
          @foreach($question->answers as $answer)
            <label for="answer{{ $answer->id }}">
              <li class="list-group-item">
                <input type="radio" name="responses[{{ $key }}][answer_id]" {{ (old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : '' }} value="{{ $answer->id }}" id="answer{{ $answer->id }}">
                {{ $answer->answer }}
                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
              </li>
            </label>
          @endforeach
          </ul>
          @error('responses.'.$key.'.answer_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>
      <!-- END PANEL NO CONTROLS -->
    </div>
    @endif
    @endforeach()
    <div id="panel-scrolling-demo" class="panel col-md-4">
      <h3 class="panel-heaidng">Your Information</h3>
      <label for="name">Your Name</label>
      <input type="text" name="survey[name]" aria-describedby="nameHelp" class="form-control" id="name" placeholder="Masukkan Nama Anda.">
      <small class="form-text text-muted" id="nameHelp">Hello what's your name?</small>

      @error('name')
        <small class="text-danger">{{ $message }}</small>
      @enderror

      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" name="survey[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
        <small id="emailHelp" class="form-text text-muted">Your Email Please</small>

        @error('email')
          <small class="text-dannger">{{ $message }}</small>
        @enderror
      </div>
    </div>
    <div class="col-md-12">
      <div class="panel-body">
        <button type="submit" class="btn btn-primary">Complete Survey</button>
      </div>
    </div>
  </form>
</div>
@endsection
