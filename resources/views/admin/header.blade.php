<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset('template_madan/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom styles -->
<link href="{{ asset('template_madan/css/style.css') }}" rel="stylesheet">
</head>
<style media="screen">
  .valign {
  position: absolute;
  left: 50%;
  top: 100%;
  transform: translate(-50%, -50%);
  }
  .panel {border-radius: 0}
</style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">

    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"> <img style="width:50px;" src="{{ asset('template_madan/images/del.jpg') }}" alt=""> Pemilihan Mahasiswa Teladan IT Del</a>
      <div class="nav justify-content-center" id="navbarResponsive">
          <center>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('dimx_dim') }}">Import Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/saw') }}">SAW</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/PerhitunganFT') }}">Fuzzy Topsis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/perbandingan') }}">Perbandingan</a>
              </li>
            </ul>
          </center>
      </div>
    </div>
  </nav>
  <!-- END : Navigation -->

  <div class="container valign">
    <div class="row panel">
      @yield('intro-header')
    </div>
  </div>

<!-- Footer -->
<footer class="py-2 bg-info fixed-bottom">
      <p class="m-0 text-center text-white">Copyright &copy; Pemilihan Mahasiswa Teladan IT Del 2020</p>
</footer>
  <!-- END : Footer -->


      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('template_madan/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('template_madan/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
  </html>
