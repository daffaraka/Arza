@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Target Triwulan</h1>
</div>

<h5 class="mt-3 mb-3"> Input SPJ</h5>
  <form action="{{ url('Target/simpan_target')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal Input</label>
      <input type="date" id="tgl_input" name="tgl_input" class="form-control" placeholder="Tanggal Input">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Periode Triwulan</label>
      <select class="form-control select2 input-lg" name="triwulanke" id="triwulanke" >
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
      <label for="kode" class="col-sm-2 col-form-label">Kode</label>
      <input type="kode" id="kode" name="kode" class="form-control" placeholder="Kode">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Kegiatan</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Kegiatan">
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal SPD Berlalu</label>
      <input type="number" id="nominal_spd_berlalu" name="nominal_spd_berlalu" class="form-control" placeholder="Nominal SPD Berlalu">
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Nominal SPD Berjalan</label>
      <input type="number" id="nominal_spd_berjalan" name="nominal_spd_berjalan" class="form-control" placeholder="Nominal SPD Berjalan">
    </div>
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Total SPD</label>
      <input type="number" id="total_spd" name="total_spd" class="form-control" placeholder="Total SPD" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Nominal SPJ Berlalu</label>
        <input type="number" id="nominal_spj_berlalu" name="nominal_spj_berlalu" class="form-control" placeholder="Nominal SPJ Berlalu">
      </div>
      <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Nominal SPJ Berjalan</label>
        <input type="number" id="nominal_spj_berjalan" name="nominal_spj_berjalan" class="form-control" placeholder="Nominal SPJ Berjalan">
      </div>
      <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Total SPJ</label>
        <input type="number" id="total_spj" name="total_spj" class="form-control" placeholder="Total SPJ" readonly>
      </div>
      <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Nominal Belum SPJ</label>
        <input type="number" id="nominal_belum_spj" name="nominal_belum_spj" class="form-control" placeholder="Nominal Belum SPJ" readonly>
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

  <script>
      var inputSPDBerlalu = document.getElementById("nominal_spd_berlalu");
      var inputSPDBerjalan = document.getElementById("nominal_spd_berjalan");
      var totalSPD = document.getElementById("total_spd");
      var inputSPJBerlalu = document.getElementById("nominal_spj_berlalu");
      var inputSPJBerjalan = document.getElementById("nominal_spj_berjalan");
      var totalSPJ = document.getElementById("total_spj");
      var totalNominal = document.getElementById("nominal_belum_spj");

      function add(val, a) {
          return val + a;
      }

      function countTotalSPD() {
          if (inputSPDBerlalu.value && inputSPDBerjalan.value) {
            totalSPD.value = parseInt(inputSPDBerlalu.value) + parseInt(inputSPDBerjalan.value);
          } else {
            totalSPD.value = null;
          }
      }

      function countTotalSPJ() {
          if (inputSPJBerlalu.value && inputSPJBerjalan.value) {
            totalSPJ.value = parseInt(inputSPJBerlalu.value) + parseInt(inputSPJBerjalan.value);
          } else {
            totalSPJ.value = null;
          }
      }

      function countTotalNominal() {
        console.log('hit');
          if (totalSPD.value && totalSPJ.value) {
            totalNominal.value = parseInt(totalSPD.value) - parseInt(totalSPJ.value);
          } else {
            totalNominal.value = null;
          }
      }

      inputSPDBerlalu.addEventListener("keyup", function() {
        countTotalSPD()
        countTotalNominal()
      });

      inputSPDBerjalan.addEventListener("keyup", function() {
        countTotalSPD()
        countTotalNominal()
      });

      inputSPJBerlalu.addEventListener("keyup", function() {
        countTotalSPJ()
        countTotalNominal()
      });

      inputSPJBerjalan.addEventListener("keyup", function() {
        countTotalSPJ()
        countTotalNominal()
      });
  </script>

@endsection