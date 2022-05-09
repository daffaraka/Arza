@extends('dashboard.layouts.main')
<title>Tambah DTH </title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">DTH</h1>
</div>

<h5 class="mt-3 mb-3">Input DTH</h5>
  <form action="{{ url('DTH/simpan_dth')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Kode Akun</label>
      <select class="form-select" aria-label="Default select example"  id="kode_akun" name="kode_akun">
          <option selected disabled>- Pilih Kode Akun -</option>
          <option value="411211">411211</option>
          <option value="411121">411121</option>
          <option value="411124">411124</option>
          <option value="411122">411122</option>
      </select>
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Jenis Pajak</label>
      <select class="form-select" aria-label="Default select example" id="jenis_pajak" name="jenis_pajak">
          <option selected disabled>- Pilih Jenis Pajak -</option>
          <option value="bagus">Code</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Nominal Pajak</label>
        <input type="number" id="nominal_pajak" name="nominal_pajak" class="form-control" placeholder="Nominal Pajak">
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">NPWP</label>
        <select class="form-select" aria-label="Default select example" id="select_npwp">
            <option selected disabled>- Pilih NPWP -</option>
            @foreach ($npwp as $pilihan)
            <option id="select_{{$pilihan->npwp}}" value="{{$pilihan->npwp}} | {{$pilihan->nama_wp}}">{{$pilihan->npwp}}</option>
            @endforeach
        </select>
        <input type="text" id="npwp" name="npwp" class="d-none" placeholder="Keperluan">
      </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama WP</label>
        <input type="text" id="nama_wp" name="nama_wp" class="form-control" placeholder="Nama WP" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Bulan</label>
        <select class="form-select" aria-label="Default select example" id="select_bulan">
            <option selected disabled>- Pilih Bulan -</option>
            <option value="1 | Januari">Januari</option>
            <option value="1 | Februari">Februari</option>
            <option value="1 | Maret">Maret</option>
            <option value="2 | April">April</option>
            <option value="2 | Mei">Mei</option>
            <option value="2 | Juni">Juni</option>
            <option value="3 | Juli">Juli</option>
            <option value="3 | Agustus">Agustus</option>
            <option value="3 | September">September</option>
            <option value="4 | Oktober">Oktober</option>
            <option value="4 | November">November</option>
            <option value="4 | Desember">Desember</option>
        </select>
        <input type="text" id="bulan" name="bulan" class="d-none" placeholder="Keperluan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Triwulan</label>
        <input type="text" id="triwulan" name="triwulan" class="form-control" placeholder="Triwulan ke" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">NTPN</label>
        <input type="text" id="ntpn" name="ntpn" class="form-control" placeholder="NTPN">
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Id Billing</label>
        <input type="number" id="id_billing" name="id_billing" class="form-control" placeholder="Id Billing">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Keperluan</label>
        <input type="text" id="keperluan" name="keperluan" class="form-control" placeholder="Keperluan">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    <script>
      var selectNPWP = document.getElementById("select_npwp");
      var inputNPWP = document.getElementById("npwp");
      var inputNamaNPWP = document.getElementById("nama_wp");

      var selectBulan = document.getElementById("select_bulan");
      var inputBulan = document.getElementById("bulan");
      var inputTriwulan = document.getElementById("triwulan");

      selectNPWP.addEventListener("change", function() {
        inputNPWP.value = selectNPWP.value.split(" | ")[0];
        inputNamaNPWP.value = selectNPWP.value.split(" | ")[1];
      });

      selectBulan.addEventListener("change", function() {
        inputBulan.value = selectBulan.value.split(" | ")[1];
        inputTriwulan.value = selectBulan.value.split(" | ")[0];
      });
    </script>
  </form>

@endsection