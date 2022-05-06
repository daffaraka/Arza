@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">GU SPD</h1>
</div>

<h5 class="mt-3 mb-3"> Input SPD</h5>
  <form action="{{ url('SPD/simpan_spd')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal Input</label>
      <input type="date" id="tgl_input" name="tgl_input" class="form-control" placeholder="Tanggal Input">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Periode Triwulan</label>
      <select class="form-control select2 input-lg" name="periode_triwulan" id="periode_triwulan" >
        <option selected disabled>Pilih Salah Satu</option>
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
      <label for="kode" class="col-sm-2 col-form-label">Kode Rekening</label>
      <input type="kode" id="kode_rek" name="kode_rek" class="form-control" placeholder="Kode Rekening">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Kegiatan</label>
      <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Bulan 1</label>
      <select class="form-control select2 input-lg" name="bulan1" id="bulan1" >
        <option selected disabled>Pilih Salah Satu</option>
        <option value="Januari" >Januari</option>
        <option value="Februari" >Februari</option>
        <option value="Maret" >Maret</option>
        <option value="April" >April</option>
        <option value="Mei" >Mei</option>
        <option value="Juni" >Juni</option>
        <option value="Juli" >Juli</option>
        <option value="Agustus" >Agustus</option>
        <option value="September" >September</option>
        <option value="Oktober" >Oktober</option>
        <option value="November" >November</option>
        <option value="Desember" >Desember</option>
    </select>
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal 1</label>
      <input type="number" id="nominal_bulan1" name="nominal_bulan1" class="form-control" placeholder="Nominal 1">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Bulan 2</label>
      <select class="form-control select2 input-lg" name="bulan2" id="bulan2" >
        <option selected disabled>Pilih Salah Satu</option>
        <option value="Januari" >Januari</option>
        <option value="Februari" >Februari</option>
        <option value="Maret" >Maret</option>
        <option value="April" >April</option>
        <option value="Mei" >Mei</option>
        <option value="Juni" >Juni</option>
        <option value="Juli" >Juli</option>
        <option value="Agustus" >Agustus</option>
        <option value="September" >September</option>
        <option value="Oktober" >Oktober</option>
        <option value="November" >November</option>
        <option value="Desember" >Desember</option>
    </select>
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal 2</label>
      <input type="number" id="nominal_bulan2" name="nominal_bulan2" class="form-control" placeholder="Nominal 2">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Bulan 3</label>
      <select class="form-control select2 input-lg" name="bulan3" id="bulan3" >
        <option selected disabled>Pilih Salah Satu</option>
        <option value="Januari" >Januari</option>
        <option value="Februari" >Februari</option>
        <option value="Maret" >Maret</option>
        <option value="April" >April</option>
        <option value="Mei" >Mei</option>
        <option value="Juni" >Juni</option>
        <option value="Juli" >Juli</option>
        <option value="Agustus" >Agustus</option>
        <option value="September" >September</option>
        <option value="Oktober" >Oktober</option>
        <option value="November" >November</option>
        <option value="Desember" >Desember</option>
    </select>
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal 3</label>
      <input type="number" id="nominal_bulan3" name="nominal_bulan3" class="form-control" placeholder="Nominal 3">
    </div>
    {{-- <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Bulan 4</label>
      <select class="form-control select2 input-lg" name="bulan4" id="bulan4" >
        <option selected disabled>Pilih Salah Satu</option>
        <option value="Januari" >Januari</option>
        <option value="Februari" >Februari</option>
        <option value="Maret" >Maret</option>
        <option value="April" >April</option>
        <option value="Mei" >Mei</option>
        <option value="Juni" >Juni</option>
        <option value="Juli" >Juli</option>
        <option value="Agustus" >Agustus</option>
        <option value="September" >September</option>
        <option value="Oktober" >Oktober</option>
        <option value="November" >November</option>
        <option value="Desember" >Desember</option>
    </select>
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal 4</label>
      <input type="number" id="nominal_bulan4" name="nominal_bulan4" class="form-control" placeholder="Nominal 4">
    </div> --}}
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Jumlah SPD</label>
      <input type="number" id="jumlah_spd" name="jumlah_spd" class="form-control" placeholder="Jumlah SPD (Nominal 1 + Nominal 2 + Nominal 3)" readonly>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

  <script>
    var inputNominal1 = document.getElementById("nominal_bulan1");
    var inputNominal2 = document.getElementById("nominal_bulan2");
    var inputNominal3 = document.getElementById("nominal_bulan3");
    var total = document.getElementById("jumlah_spd");

    function add(val, a) {
          return val + a;
      }

    function totalNominal() {
        if (inputNominal1.value || inputNominal2.value || inputNominal3.value) {
          var data = [ 
            inputNominal1.value ? parseInt(inputNominal1.value) : 0, 
            inputNominal2.value ? parseInt(inputNominal2.value) : 0, 
            inputNominal3.value ? parseInt(inputNominal3.value) : 0
          ]
          total.value = data.reduce(add, 0);
        } else {
          total.value = null;
        }
    }

    inputNominal1.addEventListener("keyup", function() {
        totalNominal()
    });

    inputNominal2.addEventListener("keyup", function() {
        totalNominal()
    });

    inputNominal3.addEventListener("keyup", function() {
        totalNominal()
    });
</script>

@endsection