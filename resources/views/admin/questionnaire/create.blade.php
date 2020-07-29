@extends('layouts.master')
@section('content')
  <h1>Kuesioner Baru</h1>
    <form class="" action="/questionnaires" method="post">
      @csrf

      <div class="form-group">
        <label for="title">Judul</label>
        <input name="title" type="text" id="title" class="form-control" placeholder="Masukkan Judul">
        <small id="titleHelp" class="form-text text-muted">Buat judul Kuesioner yang menarik.</small>

        @error('title')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>


      <div class="form-group">
        <label for="instansi">Pilih Instansi:</label>
        <select name="instansi_id" class="form-control instansiCategory" id="instansiCatId">
          <option value="0" disabled="true" selected="true">-Pilih-</option>
            @foreach($instansi as $ins)
              <option value="{{$ins->id}}">{{$ins->nama_instansi}}</option>
            @endforeach
        </select>
        @error('instansi_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
          <label>Nama Layanan : </label>
          <select name="layanan_id" class="form-control namaLayanan">
            <option value="0" selected="true" disabled="true">-Nama Layanan-</option>
          </select>

          @error('layanan_id')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>


        <script type="text/javascript">
          $(document).ready(function(){
            $(document).on("change",".instansiCategory",function(){

              let instansiId = $(this).val();
              let div = $(this).parent();
              let op =" ";

              $.ajax({
                type: "GET",
                url: '{!!URL::to('findLayananName')!!}',
                data: {'id':instansiId},
                success: function(data){
                  // console.log('suscces');
                  // console.log(data);
                  // console.log(data.length);
                  // console.log(data[0]['nama_layanan']);

                  op += '<option value="0" selected disabled>-Pilih Layanan</option>';

                  for (var i = 0; i<data.length; i++) {
                    op += '<option value="'+data[i].id+'">'+data[i].nama_layanan+'</option>';
                  }

                  div.find(".namaLayanan").html(" ");
                  div.find(".namaLayanan").append(op);
                },
                error: function(){

                }
              });
            });
          });
        </script>




      </div>


      <div class="form-group">
        <label for="purpose">Tujuan</label>
        <input name="purpose" type="text" id="purpose" class="form-control" placeholder="Masukkan Tujuan">
        <small id="purposeHelp" class="form-text text-muted">Buat Tujuan Kuesioner yang akan meningkatkan respon.</small>

        @error('purpose')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Buat Kuesioner</button>
    </form>
@endsection
