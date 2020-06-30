<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <h1>Hasil Survey Kepuasan Masyarakat</h1>
            <table class="table table-dark">
              <thead>
                <th>Nama Instansi</th>
                <th>Jumlah Responden</th>
                <th>Action</th>
              </thead>
              <tbody>
                @for($i = 0; $i < 5; $i++)
                <tr>
                  <td>Kominfo</td>
                  <td>80</td>
                  <td> <a href="{{ url('/chart') }}">Lihat Grafik</a> </td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
