@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Rekapitulasi</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/Rekap/Cetak-Rekap" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/Rekap/Export-Rekap" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<h5 class="mt-3 mb-3"> Edit Rekap </h5>

  <form action="{{ url('/Rekap/update/{id}', $rekapData->id) }}" method="POST">
    
    @csrf
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Jumlah</label>
        <input type="number" id="jmlh" name="jmlh" class="form-control" placeholder="Masukkan Jumlah" readonly value="{{$rekapData->kode}}">
      </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Jumlah</label>
      <input type="number" id="jmlh" name="jmlh" class="form-control" placeholder="Masukkan Jumlah">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Harga</label>
      <input type="text" id="harga" name="harga" class="form-control" placeholder="Tentukan Harga">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>



@endsection