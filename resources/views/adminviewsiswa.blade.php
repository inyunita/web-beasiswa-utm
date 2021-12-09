<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome.min.css" />

    <!-- AOS Animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/f8dd01d0f4.js" crossorigin="anonymous"></script>

    <title>Daftar Beasiswa</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-nav">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Tentang Beasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Kontak</a>
            </li>
          </ul>
        </div> 
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <div class="container content">
      <div class="row justify-content-between">
        <div class="kiri col-md-4">
          <div class="custom-card p-3 pb-1">
            <h6 class="text-break">Indah Yunita</h6>
            <p>Admin</p>
          </div>
          <div class="list-group custom-card">
            <a href="#" class="list-group-item list-group-item-action" aria-current="true"></i> Dashboard</a>
            <a href="/listbea" class="list-group-item list-group-item-action"> List Pemohon Beasiswa</a>
            <a href="#" class="list-group-item list-group-item-action"> Logout</a>
          </div>
        </div>

        <div class="kanan col-md-8">
          <div class="custom-card p-5">
            <div class="row">
              <h5>Pemohon Beasiswa</h5>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6">
                    <p>NIM</p>
                    <p>Nama Lengkap</p>
                    <p>Jenis Kelamin</p>
                    <p>IPK</p>
                    <p>Total Gaji Ortu</p>
                    <p>Alamat</p>
                    <p>No WA</p>
                    <p>Email</p>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $data->nim }}</p>
                    <p>{{ $data->nama }}</p>
                    <p>{{ $data->jenis_kel }}</p>
                    <p>{{ $data->ipk }}</p>
                    <p>{{ $data->gaji }}</p>
                    <p>{{ $data->alamat }}</p>
                    <p>{{ $data->wa }}</p>
                    <p>{{ $data->email }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h5>Keputusan</h5>
              <form method="POST" action="{{ url('/update/' . $data->id) }}">
                @csrf
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status_bea" value="Disetujui" id="flexRadioDefault1" />
                  <label class="form-check-label" for="flexRadioDefault1"> Setujui </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status_bea" value="Ditolak" id="flexRadioDefault2" />
                  <label class="form-check-label" for="flexRadioDefault2">Tolak </label>
                </div>
                <!-- Button submit -->
                <div class="col-12 mt-3">
                  <button type="submit" class="btn cta">Submit</button>
                </div>
              </form>
            </div>
            <!-- Akhir keputusan  dan submit -->
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir content -->

    <!-- Footer -->
    <footer class="background">
      <p>Seketariat Universitas Trunojoyo Madura</p>
      <p>JL Raya Telang Bangkalan</p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- AOS Animasi -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
