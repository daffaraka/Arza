@extends('dashboard.layouts.main')

@section('container')
<<<<<<< HEAD
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Peminjaman</h1>
</div>

<h5 class="mt-3 mb-3"> Tambah Peminjaman</h5>
  <form action="{{ url('Peminjaman/simpan_peminjaman')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Pihak Peminjam</label>
      <input type="text" id="peminjam" name="peminjam" class="form-control" placeholder="Pihak Peminjam">
    </div>
    <div class="form-group mb-2">
      <label for="date" class="col-sm-2 col-form-label">Tanggal Peminjam</label>
      <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" placeholder="Tanggal Peminjam">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Kode Barang</label>
      <select class="form-select" aria-label="Default select example" id="kode">
          <option selected disabled>- Pilih Kode -</option>
          @foreach ($rekap as $a)
           <option value="{{$a->id}} | {{$a->aset}}">{{$a->id}}</option>
          @endforeach
      </select>
      <input type="text" id="kode_barang" name="kode_barang" class="d-none" placeholder="Kode Barang" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control"
            placeholder="Pilih Kode Barang terlebih dahulu (Input ini otomatis akan terisi Nama Barang)" readonly>
    </div>
    <div class="form-group mb-2">
      <label for="year" class="col-sm-2 col-form-label">Tahun Perolehan</label>
      <input type="year" id="thn_perolehan" name="thn_perolehan" class="form-control" placeholder="Tahun Perolehan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Cara Perolehan</label>
        <input type="text" id="cara_perolehan" name="cara_perolehan" class="form-control" placeholder="Cara Perolehan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jumlah Barang</label>
        <input type="text" id="jmlh_barang" name="jmlh_barang" class="form-control" placeholder="Jumlah Barang">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Harga</label>
        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Kondisi Barang</label>
        <input type="text" id="kondisi_barang" name="kondisi_barang" class="form-control" placeholder="Kondisi Barang">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
        <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
  <script>
    var select = document.getElementById("kode");
    var inputKodeBarang = document.getElementById("kode_barang");
    var inputBarang = document.getElementById("nama_barang");

    select.addEventListener("change", function() {
        inputKodeBarang.value = select.value.split(" | ")[0];
        inputBarang.value = select.value.split(" | ")[1];
    });
  </script>
=======
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peminjaman</h1>
    </div>
>>>>>>> 8d2fd7b74d3d5300744e9b37af289bd0bec29ffc

    <h5 class="mt-3 mb-3"> Tambah Peminjaman</h5>
    <form action="{{ url('Peminjaman/simpan_peminjaman') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Pihak Peminjam</label>
            <input type="text" id="peminjam" name="peminjam" class="form-control" placeholder="Pihak Peminjam">
        </div>
        <div class="form-group mb-2">
            <label for="date" class="col-sm-2 col-form-label">Tanggal Peminjam</label>
            <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" placeholder="Tanggal Peminjam">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Kode Barang</label>
            <select class="form-select" aria-label="Default select example" id="kode">
                <option selected disabled>- Pilih Kode -</option>
                <option value="1,01 | Tanah Kota">1,01</option>
                <option value="1,02 | Alat Berat">1,02</option>
                <option value="1,03 | Baju">1,03</option>
            </select>
            <input type="text" id="kode_barang" name="kode_barang" class="d-none" placeholder="Kode Barang"
                readonly>
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                placeholder="Pilih Kode Barang terlebih dahulu (Input ini otomatis akan terisi Nama Barang)" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="year" class="col-sm-2 col-form-label">Tahun Perolehan</label>
            <input type="year" id="thn_perolehan" name="thn_perolehan" class="form-control" placeholder="Tahun Perolehan">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Cara Perolehan</label>
            <input type="text" id="cara_perolehan" name="cara_perolehan" class="form-control"
                placeholder="Cara Perolehan">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <input type="text" id="jmlh_barang" name="jmlh_barang" class="form-control" placeholder="Jumlah Barang">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Harga</label>
            <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Kondisi Barang</label>
            <input type="text" id="kondisi_barang" name="kondisi_barang" class="form-control"
                placeholder="Kondisi Barang">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Keterangan</label>
            <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        <script>
            var select = document.getElementById("kode");
            var inputKodeBarang = document.getElementById("kode_barang");
            var inputBarang = document.getElementById("nama_barang");

            select.addEventListener("change", function() {
                inputKodeBarang.value = select.value.split(" | ")[0];
                inputBarang.value = select.value.split(" | ")[1];
            });
        </script>
    </form>
@endsection
