<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
<<<<<<< HEAD
        <li><a href="{{ url('/') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Hasil Survey</span></a></li>
        <li><a href="{{ url('/instansi') }}" class=""><i class="lnr lnr-home"></i> <span>Instansi</span></a></li>
        <li><a href="{{ url('/survey') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Survey</span></a></li>
=======
        <li><a href="{{ url('/') }}" class="{{ Request::segment(1) === '/' ? 'active' : null }}"><i class="lnr lnr-chart-bars"></i> <span>Hasil Survey</span></a></li>
        <li><a href="{{ url('/instansi') }}" class="{{ Request::segment(1) === 'instansi' ? 'active' : null }}"><i class="lnr lnr-home"></i> <span>Instansi</span></a></li>
        <li><a href="{{ url('/survey') }}" class="{{ Request::segment(1) === 'survey' ? 'active' : null }}"><i class="lnr lnr-chart-bars"></i> <span>Survey</span></a></li>
>>>>>>> 8879401bb80fa9bb0977c845d62e3822f53f9b19
      </ul>
    </nav>
  </div>
</div>
