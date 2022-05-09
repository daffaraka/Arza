@extends('dashboard.layouts.main')
<title> Tambah NPWP </title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah NPWP</h1>
</div>

<h5 class="mt-3 mb-3">Input NPWP</h5>
  <form action="{{route('NPWP.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">NPWP</label>
        <input type="text" name="npwp" id="npwp" class="form-control">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama WP</label>
        <input type="text" name="nama_wp" id="nama_wp" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    {{-- <script>
      var selectKode = document.getElementById("kode");
      var inputKodeBarang = document.getElementById("kode_barang");
      var inputBarang = document.getElementById("nama_barang");

      select.addEventListener("change", function() {
          inputKodeBarang.value = select.value.split(" | ")[0];
          inputBarang.value = select.value.split(" | ")[1];
      });
    </script> --}}
  </form>

@endsection