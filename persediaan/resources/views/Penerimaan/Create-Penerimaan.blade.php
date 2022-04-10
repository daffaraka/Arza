@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Penerimaan</h1>
</div>

<h5 class="mt-3 mb-3"> Input Data Penerimaan Hari Ini</h5>
  <form action="{{ url('Penerimaan/simpan_penerimaan')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
      <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Dari</label>
      <select class="form-control select2 input-lg" name="dari" id="dari" >
        <option>Silahkan Pilih</option>
        <option value="TB Siswa" >TB Siswa</option>
        <option value="CV. Wijayatama" >CV. Wijayatama</option>
        <option value="Fotocopy Perintis" >Fotocopy Perintis</option>
        <option value="CV. Payung Teduh" >CV. Payung Teduh</option>
        <option value="Jaya Abadi Listrik" >Jaya Abadi Listrik</option>
        <option value="Toko Star" >Toko Star</option>
        <option value="Sari Rasa" >Sari Rasa</option>
        <option value="Toko Dadi Rejo" >Toko Dadi Rejo</option>
        <option value="Kantor Pos" >Kantor Pos</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal Faktur</label>
        <input type="date" id="tanggal_faktur" name="tanggal_faktur" class="form-control" placeholder="Tanggal Faktur">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Sumber Dana</label>
      <select class="form-control select2 input-lg" name="sumber_dana" id="sumber_dana" >
        <option>Silahkan Pilih</option>
        <option value="APBD" >APBD</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="char" class="col-sm-2 col-form-label">Banyaknya</label>
        <input type="char" id="banyaknya" name="banyaknya" class="form-control" placeholder="Banyaknya">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga Satuan</label>
        <input type="text" id="harga_satuan" name="harga_satuan" class="form-control" placeholder="Harga Satuan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jumlah Harga</label>
        <input type="text" id="jumlah_harga" name="jumlah_harga" class="form-control" placeholder="Jumlah Harga">
    </div>
    <div class="form-group mb-2">
        <label for="date" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
        <input type="date" id="tanggal_penerimaan" name="tanggal_penerimaan" class="form-control" placeholder="Tanggal Penerimaan">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
      <select class="form-control select2 input-lg" name="keterangan" id="keterangan" >
        <option>Silahkan Pilih</option>
        <option value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
        <option value="Belanja Alat Cetak Kantor" >Belanja Alat Cetak Kantor</option>
        <option value="Belanja Alat Listrik Kantor" >Belanja Alat Listrik Kantor</option>
        <option value="Belanja Kegiatan Kantor Lainnya" >Belanja Kegiatan Kantor Lainnya</option>
        <option value="Belanja Materai dan Benda Pos Lainnya" >Belanja Materai dan Benda Pos Lainnya</option>
      </select>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

@endsection