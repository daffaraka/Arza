@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kartu Stok</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Kartu Stok</h5>
  <form action="{{ url('KartuStok/simpan_kartustok')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{$kartustok->tanggal}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$kartustok->nama_barang}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Unit Pemasukan</label>
        <input type="text" id="unit_pemasukan" name="unit_pemasukan" class="form-control" placeholder="Unit Pemasukan" value="{{$kartustok->unit_pemasukan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Pemasukan</label>
        <input type="text" id="harga_per_unit_pemasukan" name="harga_per_unit_pemasukan" class="form-control" placeholder="Harga Pemasukan" value="{{$kartustok->harga_per_unit_pemasukan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Total Harga</label>
        <input type="text" id="total_harga_pemasukan" name="total_harga_pemasukan" class="form-control" placeholder="Total Harga" readonly value="{{$kartustok->total_harga_pemasukan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Unit Pengeluaran</label>
        <input type="text" id="unit_pengeluaran" name="unit_pengeluaran" class="form-control" placeholder="Unit Pengeluaran" value="{{$kartustok->unit_pengeluaran}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Pengeluaran</label>
        <input type="text" id="harga_per_unit_pengeluaran" name="harga_per_unit_pengeluaran" class="form-control" placeholder="Harga Pengeluaran" value="{{$kartustok->harga_per_unit_pengeluaran}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Total Harga</label>
        <input type="text" id="total_harga_pengeluaran" name="total_harga_pengeluaran" class="form-control" placeholder="Total Harga" readonly value="{{$kartustok->total_harga_pengeluaran}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Unit Peresediaan</label>
        <input type="text" id="unit_persediaan" name="unit_persediaan" class="form-control" placeholder="Unit Persediaan" value="{{$kartustok->unit_persediaan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Peresediaan</label>
        <input type="text" id="harga_per_unit_persediaan" name="harga_per_unit_persediaan" class="form-control" placeholder="Harga Persediaan" value="{{$kartustok->harga_per_unit_persediaan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Total Harga</label>
        <input type="text" id="total_harga_persediaan" name="total_harga_persediaan" class="form-control" placeholder="Total Harga" readonly value="{{$kartustok->total_harga_persediaan}}">
    </div>
    <div class="form-group mb-3">
        <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
        <select class="form-control select2 input-lg" name="keterangan" id="keterangan" >
          <option selected disabled>Silahkan Pilih</option>
          <option value="Alat Tulis Kantor" {{ ( $kartustok->keterangan == "Alat Tulis Kantor") ? 'selected' : '' }}>Alat Tulis Kantor</option>
          <option value="Belanja Alat Cetak Kantor" {{ ( $kartustok->keterangan == "Belanja Alat Cetak Kantor" ) ? 'selected' : '' }}>Belanja Alat Cetak Kantor</option>
          <option value="Belanja Alat Listrik Kantor" {{ ( $kartustok->keterangan == "Belanja Alat Listrik Kantor") ? 'selected' : '' }}>Belanja Alat Listrik Kantor</option>
          <option value="Belanja Kegiatan Kantor Lainnya" {{ ( $kartustok->keterangan == "Belanja Kegiatan Kantor Lainnya") ? 'selected' : '' }}>Belanja Kegiatan Kantor Lainnya</option>
          <option value="Belanja Materai dan Benda Pos Lainnya" {{ ( $kartustok->keterangan == "Belanja Materai dan Benda Pos Lainnya") ? 'selected' : '' }}>Belanja Materai dan Benda Pos Lainnya</option>
          <option value="TU / Bidang" {{ ( $kartustok->keterangan == "TU / Bidang") ? 'selected' : '' }}>TU / Bidang</option>
        </select>
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    <script>
      var inputPemasukan = document.getElementById("unit_pemasukan");
      var inputPemasukanHarga = document.getElementById("harga_per_unit_pemasukan");
      var inputTotalPemasukan = document.getElementById("total_harga_pemasukan");

      var inputPengeluaran = document.getElementById("unit_pengeluaran");
      var inputPengeluaranHarga = document.getElementById("harga_per_unit_pengeluaran");
      var inputTotalPengeluaran = document.getElementById("total_harga_pengeluaran");

      var inputPersediaan = document.getElementById("unit_persediaan");
      var inputPersediaanHarga = document.getElementById("harga_per_unit_persediaan");
      var inputTotalPersediaan = document.getElementById("total_harga_persediaan");

      function totalBiaya(unit) {
          switch (unit) {
            case 'pemasukan':
              if (inputPemasukan.value && inputPemasukanHarga.value) {
                inputTotalPemasukan.value = inputPemasukan.value * inputPemasukanHarga.value;
              } else {
                inputTotalPemasukan.value = null;
              }
              break;
            case 'pengeluaran':
              if (inputPengeluaran.value && inputPengeluaranHarga.value) {
                inputTotalPengeluaran.value = inputPengeluaran.value * inputPengeluaranHarga.value;
              } else {
                inputTotalPengeluaran.value = null;
              }
              break;
            case 'persediaan':
              if (inputPersediaan.value && inputPersediaanHarga.value) {
                inputTotalPersediaan.value = inputPersediaan.value * inputPersediaanHarga.value;
              } else {
                inputTotalPersediaan.value = null;
              }
              break;
            default:
              break;
          }
      }

      inputPemasukan.addEventListener("keyup", function() {
          totalBiaya('pemasukan')
      });
      inputPemasukanHarga.addEventListener("keyup", function() {
          totalBiaya('pemasukan')
      });

      inputPengeluaran.addEventListener("keyup", function() {
          totalBiaya('pengeluaran')
      });
      inputPengeluaranHarga.addEventListener("keyup", function() {
          totalBiaya('pengeluaran')
      });

      inputPersediaan.addEventListener("keyup", function() {
          totalBiaya('persediaan')
      });
      inputPersediaanHarga.addEventListener("keyup", function() {
          totalBiaya('persediaan')
      });
    </script>
  </form>

@endsection