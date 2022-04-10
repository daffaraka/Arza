@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide2.png" class="d-block" width="100%" alt="">
      <div class="carousel-caption d-none d-md-block">
          <h5>Sistem Daftar Transaksi Harian</h5>
          <p>Mengelola Daftar Transaksi Harian pada Dinas Kominfo Kota Madiun</p>
      </div>
    </div>
</div>

@endsection