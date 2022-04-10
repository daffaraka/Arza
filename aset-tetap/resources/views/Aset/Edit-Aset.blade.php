@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Aset Tetap</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Aset Tetap</h5>

  <form action="{{ url('Aset/update_aset', $aset->id) }}" method="POST">
    
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
      <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Jumlah</label>
      <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Harga</label>
      <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>

@endsection