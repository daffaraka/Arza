@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Aset Tetap</h1>
    </div>

    <h5 class="mt-3 mb-3"> Tambah Daftar Aset Tetap</h5>
    <form action="{{ url('Daftar/simpan_daftar') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group mb-2">
            <label for="number" class="col-sm-2 col-form-label">Kode Barang</label>
            <select class="form-select" aria-label="Default select example" id="kode">
                <option selected disabled>- Pilih Kode -</option>
                <option value="1,01 | Tanah Kota">1,01</option>
                <option value="1,02 | Alat Berat">1,02</option>
                <option value="1,03 | Baju">1,03</option>
            </select>
            <input type="text" id="kode_barang" name="kode_barang" class="d-none" placeholder="Kode Barang" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Register</label>
            <input type="text" id="register" name="register" class="form-control" placeholder="Register">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
            <input type="text" id="nama" name="nama" class="form-control"
                placeholder="Pilih Kode Barang terlebih dahulu (Input ini otomatis akan terisi Nama Barang)" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Merk/Type Barang</label>
            <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk/Type Barang">
        </div>
        <div class="form-group mb-2">
            <label for="year" class="col-sm-2 col-form-label">Tahun Perolehan</label>
            <input type="year" id="tahun" name="tahun" class="form-control" placeholder="Tahun Perolehan">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Harga Beli</label>
            <input type="text" id="harga_beli" name="harga_beli" class="form-control" placeholder="Harga Beli">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Umur Ekonomis</label>
            <input type="text" id="umur_ekonomis" name="umur_ekonomis" class="form-control" placeholder="Umur Ekonomis">
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Biaya Penyusutan</label>
            <input type="text" id="biaya_peny" name="biaya_peny" class="form-control" placeholder="Biaya Penyusutan"
                readonly>
        </div>
        <div class="form-group mb-2">
            <label for="text" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <input type="text" id="jmlh_barang" name="jmlh_barang" class="form-control" placeholder="Jumlah Barang">
        </div>
        <div class="form-group mb-3">
            <label for="text" class="col-sm-2 col-form-label">Kondisi Barang</label>
            <select class="form-control select2 input-lg" name="kondisi" id="kondisi">
                <option>Pilih Salah Satu</option>
                <option value="B">Baik</option>
                <option value="KB">Kurang Baik</option>
            </select>
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
            var inputBarang = document.getElementById("nama");
            var inputUmur = document.getElementById("umur_ekonomis");
            var inputHarga = document.getElementById("harga_beli");
            var inputPeny = document.getElementById("biaya_peny");

            select.addEventListener("change", function() {
                inputKodeBarang.value = select.value.split(" | ")[0];
                inputBarang.value = select.value.split(" | ")[1];
            });

            function totalBiaya() {
                if (inputUmur.value && inputHarga.value) {
                    inputPeny.value = inputHarga.value / inputUmur.value;
                } else {
                    inputPeny.value = null;
                }
            }

            inputUmur.addEventListener("keyup", function() {
                totalBiaya()
            });

            inputHarga.addEventListener("keyup", function() {
                totalBiaya()
            });
        </script>
    </form>
@endsection
