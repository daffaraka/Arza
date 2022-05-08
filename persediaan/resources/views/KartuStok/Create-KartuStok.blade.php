@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kartu Stok</h1>
</div>

<h5 class="mt-3 mb-3"> Input Kartu Stok</h5>
  <form action="{{ url('KartuStok/simpan_kartustok')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang">
    </div>
    {{-- 
       --}}
    {{-- <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Unit Pengeluaran</label>
        <input type="text" id="unit_pengeluaran" name="unit_pengeluaran" class="form-control" placeholder="Unit Pengeluaran">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Pengeluaran</label>
        <input type="text" id="harga_per_unit_pengeluaran" name="harga_per_unit_pengeluaran" class="form-control" placeholder="Harga Pengeluaran">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Total Harga</label>
        <input type="text" id="total_harga_pengeluaran" name="total_harga_pengeluaran" class="form-control" placeholder="Total Harga" readonly>
    </div> --}}
     <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Unit Pemasukkan</label>
        <input type="text" id="unit_pemasukan" name="unit_pemasukan" class="form-control" placeholder="Unit Pemasukkan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Pemasukkan</label>
        <input type="text" id="harga_per_unit_pemasukan" name="harga_per_unit_pemasukan" class="form-control" placeholder="Harga Pemasukkan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Total Harga</label>
        <input type="text" id="total_harga_pemasukan" name="total_harga_pemasukan" class="form-control" placeholder="Total Harga" readonly>
    </div>
    <div class="form-group mb-3">
        <label for="text" class="col-sm-2 col-form-label">Keterangan Pertama</label>
        <select class="form-control select2 input-lg" name="keterangan_1" id="keterangan_1" >
          <option selected disabled>Silahkan Pilih</option>
          <option value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
          <option value="Belanja Alat Cetak Kantor" >Belanja Alat Cetak Kantor</option>
          <option value="Belanja Alat Listrik Kantor" >Belanja Alat Listrik Kantor</option>
          <option value="Belanja Kegiatan Kantor Lainnya" >Belanja Kegiatan Kantor Lainnya</option>
          <option value="Belanja Materai dan Benda Pos Lainnya" >Belanja Materai dan Benda Pos Lainnya</option>
          <option value="TU / Bidang" >TU / Bidang</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="text" class="col-sm-2 col-form-label">Keterangan Kedua</label>
        <input type="text" id="keterangan_2" name="keterangan_2" class="form-control" placeholder="Keterangan kedua">

      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    <script>
      var inputPemasukan = document.getElementById("unit_pemasukan");
      var inputPemasukanHarga = document.getElementById("harga_per_unit_pemasukan");
      var inputTotalPemasukan = document.getElementById("total_harga_pemasukan");

      // var inputPengeluaran = document.getElementById("unit_pengeluaran");
      // var inputPengeluaranHarga = document.getElementById("harga_per_unit_pengeluaran");
      // var inputTotalPengeluaran = document.getElementById("total_harga_pengeluaran");

      // var inputPersediaan = document.getElementById("unit_persediaan");
      // var inputPersediaanHarga = document.getElementById("harga_per_unit_persediaan");
      // var inputTotalPersediaan = document.getElementById("total_harga_persediaan");

      function totalBiaya(unit) {
          switch (unit) {
            case 'pemasukan':
              if (inputPemasukan.value && inputPemasukanHarga.value) {
                inputTotalPemasukan.value = inputPemasukan.value * inputPemasukanHarga.value;
              } else {
                inputTotalPemasukan.value = null;
              }
              break;
            // case 'pengeluaran':
            //   if (inputPengeluaran.value && inputPengeluaranHarga.value) {
            //     inputTotalPengeluaran.value = inputPengeluaran.value * inputPengeluaranHarga.value;
            //   } else {
            //     inputTotalPengeluaran.value = null;
            //   }
            //   break;
            // case 'persediaan':
            //   if (inputPersediaan.value && inputPersediaanHarga.value) {
            //     inputTotalPersediaan.value = inputPersediaan.value * inputPersediaanHarga.value;
            //   } else {
            //     inputTotalPersediaan.value = null;
            //   }
            //   break;
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

      // inputPengeluaran.addEventListener("keyup", function() {
      //     totalBiaya('pengeluaran')
      // });
      // inputPengeluaranHarga.addEventListener("keyup", function() {
      //     totalBiaya('pengeluaran')
      // });

      // inputPersediaan.addEventListener("keyup", function() {
      //     totalBiaya('persediaan')
      // });
      // inputPersediaanHarga.addEventListener("keyup", function() {
      //     totalBiaya('persediaan')
      // });
    </script>
  </form>

@endsection