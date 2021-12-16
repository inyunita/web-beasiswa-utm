@extends('layouts.main')

{{-- login --}}
@section('hero')
<main class="atas">
    <div class="container d-flex justify-content-center">
      <div class="custom-card p-3 col-md-4">
        <h3 class="judul text-center">REGISTER</h3>
        <form class="row g-3" action="/register" method="post" >
            @csrf
          <div class="col-md-12">
            <label for="username" class="form-label" >Username</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="username" />
          </div>

          <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" />
          </div>

          <div class="d-flex justify-content-center mt-5 mb-5">
            <button type="submit" class="btn cta">Register</button>
          </div>
          <small>sudah punya akun? <a href="/login">Masuk</a></small>
        </form>
      </div>
    </div>
  </main>
  @endsection
  {{-- akhir login --}}