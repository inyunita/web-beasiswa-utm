 @extends('layouts.main')
 
 <!-- Hero -->
 @section('hero')
      <div class="row">
        <div class="col-md-6 align-self-center welcome" data-aos="fade-up" data-aos-duration="1500">
          <h1>Beasiswa Mahasiswa Universitas Trunojoyo Madura</h1>
          <p>Program beasiswa ini merupakan program kampus khusus untuk Mahasiswa Universitas Trunojoyo Madura yang berprestasi</p>
          <a class="cta" href="">Daftar Sekarang</a>
        </div>
        <div class="col-md-6 gambar" data-aos="fade-left" data-aos-delay="150" data-aos-duration="2000">
          <img src="aset/rektorat.png" alt="ilustrasi" />
        </div>
      </div>
@endsection
<!-- Akhir Hero -->

<!-- Persyaratan Beasiswa -->
@section('home-1')
      <div class="row mb-4">
        <div class="align-self-center text-center">
          <h3 data-aos="fade-up" data-aos-duration="3000">Persyaratan Beasiswa</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200">
            <div class="card-body">
              <p class="text-center">Minimal Semester 3</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="350" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">IPK minimal 3.0</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="450" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Personal Statement</p>
            </div>
          </div>
        </div>
      </div>
@endsection

<!-- Akhir Persyaratan -->

<!-- Alur Pendaftaran  -->
@section('home-2')
      <div class="row mb-3">
        <div class="align-self-center text-center">
          <h3 data-aos="fade-up" data-aos-duration="3000">Alur Pendaftaran</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200">
            <div class="card-body">
              <p class="text-center">Registrasi Online</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="350" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Tes Tulis</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="450" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Tes Wawancara</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="450" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Hasil Seleksi</p>
            </div>
          </div>
        </div>
      </div>
@endsection
<!-- Akhir Alur Pendaftaran -->

<!-- Beasiswa yg didapat -->
@section('home-3')
      <div class="row mb-4">
        <div class="align-self-center text-center">
          <h3 data-aos="fade-up" data-aos-duration="3000">Beasiswa yang Didapat</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200">
            <div class="card-body">
              <p class="text-center">100% Bebas UKT</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="350" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Biaya Hidup Bulanan</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 custom-card" data-aos="flip-right" data-aos-delay="450" data-aos-duration="3000">
            <div class="card-body">
              <p class="text-center">Fasilitas Pendidikan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
<!-- Akhir Beasiswa yang didapat-->

