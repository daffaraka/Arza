@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Barang</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Persediaan Barang Habis Pakai</h5>

  <form action="{{ url('Penerimaan/update_penerimaan', $penerimaan->id) }}" method="POST">
    
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $penerimaan->tanggal }}">
      </div>
      <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Dari</label>
        <input type="text" id="dari" name="dari" class="form-control" placeholder="Dari" value="{{ $penerimaan->dari }}">
    </div>
      <div class="form-group mb-2">
          <label for="date" class="col-sm-2 col-form-label">Tanggal Faktur</label>
          <input type="date" id="tanggal_faktur" name="tanggal" class="form-control" placeholder="Tanggal Faktur" value="{{ $penerimaan->tanggal_faktur }}">
      </div>
      <div class="form-group mb-2">
          <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
          <input type="text" id="nama_barang" name="nama" class="form-control" placeholder="Nama Barang" value="{{ $penerimaan->nama_barang }}">
      </div>
      <div class="form-group mb-2">
          <label for="text" class="col-sm-2 col-form-label">Sumber Dana</label>
          <input type="text" id="sumber_dana" name="sumber" class="form-control" placeholder="Sumber Dana" value="{{ $penerimaan->sumber_dana }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Banyaknya</label>
          <input type="number" id="banyak" name="banyak" class="form-control" placeholder="Banyaknya" value="{{ $penerimaan->banyak }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Harga Satuan</label>
          <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga Satuan" value="{{ $penerimaan->harga_satuan }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Jumlah Harga</label>
          <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Harga" value="{{ $penerimaan->jumlah_harga }}">
      </div>
      <div class="form-group mb-2">
          <label for="date" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
          <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal Penerimaan" value="{{ $penerimaan->tanggal_penerimaan }}">
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>

@endsection