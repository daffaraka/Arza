@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">GU SPJ</h1>
</div>

<h5 class="mt-3 mb-3"> Input SPJ</h5>
  <form action="{{ url('SPJ/simpan_spj')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal Input</label>
      <input type="date" id="tgl_input" name="tgl_input" class="form-control" placeholder="Tanggal Input">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Periode Triwulan</label>
      <select class="form-control select2 input-lg" name="triwulanke" id="triwulanke" >
        <option>Pilih Salah Satu</option>
        <option value="Triwulan 1" >Triwulan 1</option>
        <option value="Triwulan 2" >Triwulan 2</option>
        <option value="Triwulan 3" >Triwulan 3</option>
    </select>
    </div>
    <div class="form-group mb-2">
      <label for="year" class="col-sm-2 col-form-label">Tahun</label>
      <input type="year" id="tahun" name="tahun" class="form-control" placeholder="Tahun">
    </div>
    <div class="form-group mb-2">
      <label for="kode" class="col-sm-2 col-form-label">Kode</label>
      <input type="kode" id="kode" name="kode" class="form-control" placeholder="Kode">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Kegiatan</label>
      <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">GU SPJ Ke</label>
      <input type="text" id="spj_gu_ke" name="spj_gu_ke" class="form-control" placeholder="GU SPJ Ke">
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal</label>
      <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Nominal">
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Total</label>
      <input type="number" id="total" name="total" class="form-control" placeholder="Total">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

@endsection