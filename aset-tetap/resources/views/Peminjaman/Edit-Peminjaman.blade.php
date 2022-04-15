@extends('dashboard.layouts.main')
<title>Perbarui Peminjaman</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Perbarui Peminjaman</h1>
</div>

<h5 class="mt-3 mb-3"> Tambah Peminjaman</h5>
  <form action="{{ url('/Peminjaman/update_peminjaman', $Peminjaman->id)}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Pihak Peminjam</label>
      <input type="text" id="peminjam" name="peminjam" class="form-control" placeholder="Pihak Peminjam" value="{{ $Peminjaman->peminjam}}">
    </div>
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal Peminjam</label>
      <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" placeholder="Tanggal Peminjam"  value="{{ $Peminjaman->peminjam}}">
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
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$Peminjaman->nama_barang}}" readonly>
    </div>
    <div class="form-group mb-2">
      <label for="year" class="col-sm-2 col-form-label">Tahun Perolehan</label>
      <input type="year" id="thn_perolehan" name="thn_perolehan" class="form-control" placeholder="Tahun Perolehan" value="{{$Peminjaman->thn_perolehan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Cara Perolehan</label>
        <input type="text" id="cara_perolehan" name="cara_perolehan" class="form-control" placeholder="Cara Perolehan" value="{{$Peminjaman->cara_perolehan}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jumlah Barang</label>
        <input type="text" id="jmlh_barang" name="jmlh_barang" class="form-control" placeholder="Jumlah Barang" value="{{$Peminjaman->jmlh_barang}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga</label>
        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" value="{{$Peminjaman->harga}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Kondisi Barang</label>
        <input type="text" id="kondisi_barang" name="kondisi_barang" class="form-control" placeholder="Kondisi Barang" value="{{$Peminjaman->kondisi_barang}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
        <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan" value="{{$Peminjaman->ket}}">  
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
  <script>
    var kode = {{$Peminjaman->kode_barang}}
    var nama = '{{$Peminjaman->nama_barang}}'
    var select = document.getElementById("kode");
    var selectedItem = document.getElementById("select_" + kode);
    var inputKodeBarang = document.getElementById("kode_barang");
    var inputBarang = document.getElementById("nama_barang");

    select.addEventListener("change", function() {
        inputKodeBarang.value = select.value.split(" | ")[0];
        inputBarang.value = select.value.split(" | ")[1];
    });

    selectedItem.setAttribute('selected', true)
    inputKodeBarang.value = kode
    inputBarang.value = nama
</script>

@endsection