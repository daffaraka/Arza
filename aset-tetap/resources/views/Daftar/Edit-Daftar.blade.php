@extends('dashboard.layouts.main')
<title>Edit Daftar Aset</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Perbarui Daftar Aset Tetap</h1>
</div>

<h5 class="mt-3 mb-3"> Tambah Daftar Aset Tetap</h5>
  <form action="{{ url('Daftar/update_daftar',$Daftar->id)}}" method="post">
    {{ csrf_field() }}


    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Register</label>
      <input type="text" id="register" name="register" class="form-control" placeholder="Register" value="{{$Daftar->register}}">
    </div>

    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Kode Barang</label>
      <select class="form-select" aria-label="Default select example" id="kode">
          @foreach ($rekap as $pilihan)
           <option id="select_{{$pilihan->kode}}" value="{{$pilihan->kode}} | {{$pilihan->aset}}">{{$pilihan->kode}}</option>
          @endforeach
      </select>
      <input type="text" id="kode_barang" name="kode_barang" class="d-none" placeholder="Kode Barang" readonly>
    </div>

  
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Barang" value="{{$Daftar->nama}}" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Merk/Type Barang</label>
        <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk/Type Barang" value="{{$Daftar->merk}}">
    </div>
    <div class="form-group mb-2">
        <label for="year" class="col-sm-2 col-form-label">Tahun Perolehan</label>
        <input type="year" id="tahun" name="tahun" class="form-control" placeholder="Tahun Perolehan" value="{{$Daftar->tahun}}">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Harga Beli</label>
      <input type="text" id="harga_beli" name="harga_beli" class="form-control" placeholder="Harga Beli" value="{{$Daftar->harga_beli}}">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Umur Ekonomis</label>
      <input type="text" id="umur_ekonomis" name="umur_ekonomis" class="form-control" placeholder="Umur Ekonomis" value="{{$Daftar->umur_ekonomis}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Biaya Penyusutan</label>
        <input type="text" id="biaya_peny" name="biaya_peny" class="form-control" placeholder="Biaya Penyusutan" value="{{$Daftar->biaya_peny}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jumlah Barang</label>
        <input type="text" id="jmlh_barang" name="jmlh_barang" class="form-control" placeholder="Jumlah Barang" value="{{$Daftar->jmlh_barang}}">
    </div>
    <div class="form-group mb-3">
      <label for="text" class="col-sm-2 col-form-label">Kondisi Barang</label>
      <select class="form-control select2 input-lg" name="kondisi" id="kondisi" >
        <option>Pilih Salah Satu</option>
        <option value="B" >Baik</option>
        <option value="KB" >Kurang Baik</option>
      </select>
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
        <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan" value="{{$Daftar->ket}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>


  <script>
    var kode = {{$Daftar->kode_barang}}
    var nama = '{{$Daftar->nama}}'
    var select = document.getElementById("kode");
    var selectedItem = document.getElementById("select_" + kode);
    var inputKodeBarang = document.getElementById("kode_barang");
    var inputBarang = document.getElementById("nama");

    select.addEventListener("change", function() {
        inputKodeBarang.value = select.value.split(" | ")[0];
        inputBarang.value = select.value.split(" | ")[1];
    });

    selectedItem.setAttribute('selected', true)
    inputKodeBarang.value = kode
    inputBarang.value = nama
</script>
@endsection