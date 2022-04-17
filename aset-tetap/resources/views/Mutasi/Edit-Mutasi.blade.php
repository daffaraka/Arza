@extends('dashboard.layouts.main')
<title>Edit Mutasi</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Perbarui Mutasi Aset</h1>
</div>
    <form action="{{ url('/Mutasi/update_mutasi', $mutasi->id) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Register</label>
            <input type="text" id="register" name="register" class="form-control" placeholder="Register" value="{{$mutasi->register}}">
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
            <input type="text" id="nama" name="nama" class="form-control"
                placeholder="Pilih Kode Barang terlebih dahulu (Input ini otomatis akan terisi Nama Barang)" value="{{$mutasi->nama}}" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Merk</label>
            <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk" value="{{$mutasi->merk}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Bahan</label>
            <input type="text" id="bahan" name="bahan" class="form-control" placeholder="Bahan" value="{{$mutasi->bahan}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Cara Perolehan</label>
            <input type="text" id="cara_perolehan" name="cara_perolehan" class="form-control"
                placeholder="Cara Perolehan" value="{{$mutasi->cara_perolehan}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Ukuran Barang</label>
            <input type="text" id="ukuran_barang" name="ukuran_barang" class="form-control" placeholder="Ukuran Barang" value="{{$mutasi->ukuran_barang}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Satuan</label>
            <input type="text" id="satuan" name="satuan" class="form-control" placeholder="Satuan" value="{{$mutasi->satuan}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Kondisi</label>
            <input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Kondisi" value="{{$mutasi->kondisi}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Barang</label>
            <input type="text" id="barang" name="barang" class="form-control" placeholder="Barang" value="{{$mutasi->barang}}">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Harga</label>
            <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" value="{{$mutasi->harga}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        
        <script>
            var kode = {{$mutasi->kode_barang}}
            var nama = '{{$mutasi->nama}}'
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