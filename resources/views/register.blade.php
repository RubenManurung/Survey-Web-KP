<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css')}}">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}">
  	<!-- MAIN CSS -->
  	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css')}}">
  	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css')}}">
  	<!-- GOOGLE FONTS -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  	<!-- ICONS -->
  	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  </head>
  <body>
    <div class="container">
      <div id="wrapper">
          <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
              <div class="auth-box ">
                <div class="left">
                  <div class="content">
                    <div class="header">
                      <center>
                        <h1>Buat Akun Anda</h1>
                      </center>
                    </div>
                    <form class="form-auth-small" action="/register/create_register">
                      <div class="form-group">
                        <label for="NIK" class="control-label sr-only">NIK</label>
                        <input name="nik" type="text" class="form-control" id="NIK" value="" placeholder="Masukkan NIK Anda..">
                      </div>
                      <div class="form-group">
                        <label for="Nama" class="control-label sr-only">Nama</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="Nama" value="" placeholder="Masukkan Nama Anda..">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="noHP" class="control-label sr-only">No.Telp</label>
                        <input name="jenis_kelamin" type="text" class="form-control" id="noHP" value="" placeholder="Masukkan No.Telp Anda..">
                      </div>
                      <div class="form-group">
                        <label for="Pekerjaan" class="control-label sr-only">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="Pekerjaan" value="" placeholder="Masukkan Pekerjaan Anda..">
                      </div>
                      <div class="form-group">
                      <label for="Alamat" class="control-label sr-only">Alamat</label>
                        <textarea name="alamat" class="form-control" id="Alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block"> <a href="/login">Daftar</a> </button>
                    </form>
                  </div>
                </div>
                <div class="right">
                  <div class="overlay"></div>
                  <div class="content text">
                    <h1 class="heading">Website Kuesioner Kominfo Taput</h1>
                    <p>By Kominfo Taput</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('admin/assets/scripts/klorofil-common.js')}}"></script>
  </body>
</html>
