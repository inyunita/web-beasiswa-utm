@extends('layouts/after-login')
    
    <!-- Content -->
  @section('kanan')
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
  @endsection


    <!-- Akhir content -->


