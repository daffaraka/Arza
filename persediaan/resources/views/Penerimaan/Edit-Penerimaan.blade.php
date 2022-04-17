@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Barang</h1>
</div>

<h5 class="mt-3 mb-3"> Edit Persediaan Barang Habis Pakai</h5>

  <form action="{{ url('Penerimaan/update_penerimaan', $penerimaan ?? ''->id) }}" method="POST">
    
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $penerimaan->tanggal }}">
      </div>
      <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Dari</label>
        <input type="text" id="dari" name="dari" class="form-control" placeholder="Dari" value="{{ $penerimaan->dari }}">
    </div>
      <div class="form-group mb-2">
          <label for="date" class="col-sm-2 col-form-label">Tanggal Faktur</label>
          <input type="date" id="tanggal_faktur" name="tanggal_faktur" class="form-control" placeholder="Tanggal Faktur" value="{{ $penerimaan->tanggal_faktur }}">
      </div>
      <div class="form-group mb-2">
          <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
          <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $penerimaan->nama_barang }}">
      </div>
      <div class="form-group mb-2">
          <label for="text" class="col-sm-2 col-form-label">Sumber Dana</label>
          <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" placeholder="Sumber Dana" value="{{ $penerimaan->sumber_dana }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Banyaknya</label>
          <input type="number" id="banyak" name="banyaknya" class="form-control" placeholder="Banyaknya" value="{{ $penerimaan->banyaknya }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Harga Satuan</label>
          <input type="number" id="harga" name="harga_satuan" class="form-control" placeholder="Harga Satuan" value="{{ $penerimaan->harga_satuan }}">
      </div>
      <div class="form-group mb-2">
          <label for="number" class="col-sm-2 col-form-label">Jumlah Harga</label>
          <input type="number" id="jumlah" name="jumlah_harga" class="form-control" placeholder="Jumlah Harga" value="{{ $penerimaan->jumlah_harga }}" readonly>
      </div>
      <div class="form-group mb-2">
          <label for="date" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
          <input type="date" id="tanggal" name="tanggal_penerimaan" class="form-control" placeholder="Tanggal Penerimaan" value="{{ $penerimaan->tanggal_penerimaan }}">
      </div>
   
      <div class="form-group mb-3">
        <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
        <select class="form-control select2 input-lg" name="keterangan" id="keterangan" >
          <option selected disabled>Silahkan Pilih</option>
          <option value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
          <option value="Belanja Alat Cetak Kantor" >Belanja Alat Cetak Kantor</option>
          <option value="Belanja Alat Listrik Kantor" >Belanja Alat Listrik Kantor</option>
          <option value="Belanja Kegiatan Kantor Lainnya" >Belanja Kegiatan Kantor Lainnya</option>
          <option value="Belanja Materai dan Benda Pos Lainnya" >Belanja Materai dan Benda Pos Lainnya</option>
        </select>
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Ubah</button>
      </div>
    <script>
      var inputBanyak = document.getElementById("banyak");
      var inputHarga = document.getElementById("harga");
      var inputJumlah = document.getElementById("jumlah");

      function totalBiaya() {
          if (inputBanyak.value && inputHarga.value) {
            inputJumlah.value = parseInt(inputBanyak.value) * parseInt(inputHarga.value);
          } else {
            inputJumlah.value = null;
          }
      }

      inputBanyak.addEventListener("keyup", function() {
          totalBiaya()
      });

      inputHarga.addEventListener("keyup", function() {
          totalBiaya()
      });
    </script>
  </form>

@endsection