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
            <a href="#" class="list-group-item list-group-item-action" aria-current="true"><i class="bi bi-tree-fill"></i> Biodata</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-house-door-fill"></i> Pendaftaran Beasiswa</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-house-door-fill"></i> Status Beasiswa</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-box-arrow-right"></i> Logout</a>
          </div>
        </div>

        <div class="kanan col-md-8">
          <div class="custom-card p-5">
            <div class="row">
              <!-- Pencarian -->
              <form class="col-md-7 d-flex align-items-center pencarian" method="POST">
                <input class="form-control form-control-lg-2" type="text" placeholder="Temukan Mahasiswa" aria-label="default input example" />
                <!-- Button cari -->
                <button type="button" class="btn cta-sm">Cari</button>
              </form>

              <form class="col-md-5 d-flex align-items-center" action="" method="POST">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Filter Status</option>
                  <option value="1">Disetujui</option>
                  <option value="2">Ditolak</option>
                  <option value="2">Menunggu persetujuan</option>
                </select>
              </form>
            </div>

            <!-- JIKA SUDAH ADA DATA -->

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Mahasiswa</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Jenis Beasiswa</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Anita Rusmiandi</td>
                  <td>190411100500</td>
                  <td>Beasiswa Prestasi</td>
                  <td>Disetujui</td>
                  <td><a href="">view</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Yenita Kusrahardini</td>
                  <td>190411100600</td>
                  <td>Beasiswa Tidak Mampu</td>
                  <td>Ditolak</td>
                  <td><a href="">view</a></td>
                </tr>
              </tbody>
            </table>
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
