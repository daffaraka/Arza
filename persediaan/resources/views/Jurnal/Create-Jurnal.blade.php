@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jurnal</h1>
</div>

<h5 class="mt-3 mb-3"> Input Jurnal</h5>
  <form action="{{ url('Jurnal/simpan_jurnal')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Transaksi</label>
      <select class="form-control select2 input-lg" name="transaksi" id="transaksi" >
        <option>Silahkan Pilih</option>
        <option value="Pembelian" >Pembelian</option>
        <option value="Pemakaian" >Pemakaian</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Uraian Debit</label>
        <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Uraian Kredit</label>
      <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian">
  </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Debit</label>
        <input type="text" id="debit" name="debit" class="form-control" placeholder="Debit">
    </div>
    {{-- <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Kredit</label>
        <input type="text" id="kredit" name="kredit" class="form-control" placeholder="Kredit">
    </div> --}}
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

@endsection