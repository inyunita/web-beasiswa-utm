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
            <form class="form-crud row g-3" action="" method="">
              <div class="col-md-12">
                <label for="jenis" class="form-label">Pilih Jenis Beasiswa</label>
                <select id="jenis" class="form-select">
                  <option>Beasiswa Prestasi</option>
                  <option>Beasiswa Tidak Mampu</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" />
              </div>
              <div class="col-md-6">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="jeniskelamin" class="form-select">
                  <option selected>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="NIM" class="form-label">NIM</label>
                <input type="text" class="form-control" id="NIM" name="nim" />
              </div>
              <div class="col-md-6">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" />
              </div>
              <div class="col-md-6">
                <label for="ipk" class="form-label">IPK</label>
                <input type="text" class="form-control" id="ipk" name="ipk" />
              </div>
              <div class="col-md-6">
                <label for="gaji" class="form-label">Total Gaji Ortu</label>
                <input type="text" class="form-control" id="gaji" name="gaji" />
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <textarea name="address" id="address" cols="100%" rows="5" class="form-control"></textarea>
              </div>
              <div class="col-md-6">
                <label for="nomor" class="form-label">No WA</label>
                <input type="text" class="form-control" id="nomor" name="nomor" />
              </div>
              <div class="col-md-6">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="Email" name="email" />
              </div>
              <div class="col-12">
                <label for="formFile" class="form-label">Scan Transkrip Nilai</label>
                <input class="form-control" type="file" id="formFile" />
                <img class="mt-3 mb-5" src="image/ktp.jpg" alt="KTP" />
              </div>

              <div class="col-12">
                <button type="submit" class="btn cta-sm">Submit</button>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
            </form>
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
