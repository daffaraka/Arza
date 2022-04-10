@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Mutasi Barang</h1>
</div>

<h5 class="mt-3 mb-3"> Tambah Mutasi Barang</h5>
  <form action="{{ url('Mutasi/simpan_mutasi')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Kode Barang</label>
      <input type="number" id="kode_barang" name="kode_barang" class="form-control" placeholder="Kode Barang">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Register</label>
      <input type="text" id="register" name="register" class="form-control" placeholder="Register">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Barang">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Merk</label>
      <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Bahan</label>
      <input type="text" id="bahan" name="bahan" class="form-control" placeholder="Bahan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Cara Perolehan</label>
        <input type="text" id="cara_perolehan" name="cara_perolehan" class="form-control" placeholder="Cara Perolehan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Ukuran Barang</label>
        <input type="text" id="ukuran_barang" name="ukuran_barang" class="form-control" placeholder="Ukuran Barang">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Satuan</label>
        <input type="text" id="satuan" name="satuan" class="form-control" placeholder="Satuan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Kondisi</label>
        <input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Kondisi">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Barang</label>
        <input type="text" id="barang" name="barang" class="form-control" placeholder="Barang">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga</label>
        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

@endsection