@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Barang</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Persediaan Barang Habis Pakai</h5>

  <form action="{{ url('DaftarBarang/update_barang', $daftarbarang->id) }}" method="POST">
    
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
      <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $daftarbarang->nama_barang }}">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Jenis Barang</label>
      <select class="form-control select2 input-lg" name="jenis" id="jenis_barang" >
        <option selected>{{ $daftarbarang->jenis_barang }}</option>
        <option value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
        <option value="Belanja Alat Cetak Kantor" >Belanja Alat Cetak Kantor</option>
        <option value="Belanja Alat Listrik Kantor" >Belanja Alat Listrik Kantor</option>
        <option value="Belanja Kegiatan Kantor Lainnya" >Belanja Kegiatan Kantor Lainnya</option>
        <option value="Belanja Materai dan Benda Pos Lainnya" >Belanja Materai dan Benda Pos Lainnya</option>
    </select>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>

@endsection