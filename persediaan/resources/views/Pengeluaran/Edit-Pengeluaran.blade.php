@extends('dashboard.layouts.main')
<title> Edit Pengeluaran</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Pengeluaran</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Pengeluaran Hari Ini</h5>
  <form action="{{ url('Pengeluaran/simpan_pengeluaran')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$pengeluaran->nama_barang}}">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Sumber Dana</label>
      <select class="form-control select2 input-lg" name="sumber_dana" id="sumber_dana" >
        <option>Silahkan Pilih</option>
        <option value="APBD" >APBD</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Banyaknya</label>
        <input type="text" id="banyaknya" name="banyaknya" class="form-control" placeholder="Banyaknya" value="{{$pengeluaran->banyaknya}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Satuan</label>
        <input type="text" id="harga_satuan" name="harga_satuan" class="form-control" placeholder="Harga Satuan" value="{{$pengeluaran->harga_satuan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jumlah Harga</label>
        <input type="text" id="jumlah_harga" name="jumlah_harga" class="form-control" placeholder="Jumlah Harga" value="{{$pengeluaran->jumlah_harga}}">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Untuk</label>
      <select class="form-control select2 input-lg" name="untuk" id="untuk" >
        <option>Silahkan Pilih</option>
        <option value="TU / Bidang" >TU / Bidang</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal Penyerahan</label>
        <input type="date" id="tanggal_penyerahan" name="tanggal_penyerahan" class="form-control" placeholder="Tanggal Penyerahan" value="{{$pengeluaran->tanggal_penyerahan}}">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
      <select class="form-control select2 input-lg" name="keterangan" id="keterangan" >
        <option>Silahkan Pilih</option>
        <option value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
        <option value="Belanja Alat Cetak Kantor" >Belanja Alat Cetak Kantor</option>
        <option value="Belanja Alat Listrik Kantor" >Belanja Alat Listrik Kantor</option>
        <option value="Belanja Kegiatan Kantor Lainnya" >Belanja Kegiatan Kantor Lainnya</option>
        <option value="Belanja Materai dan Benda Pos Lainnya" >Belanja Materai dan Benda Pos Lainnya</option>
      </select>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

@endsection