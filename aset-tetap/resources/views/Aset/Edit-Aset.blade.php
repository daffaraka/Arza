@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Aset Tetap</h1>
    </div>

    <h5 class="mt-3 mb-3"> Edit Aset Tetap</h5>

  <form action="{{ url('Aset/update_aset', $aset->id) }}" method="POST">
    
    {{ csrf_field() }}
  
    <div class="form-group mb-2">
      <label for="number" class="col-sm-2 col-form-label">Kode Barang</label>
      <select class="form-select" aria-label="Default select example" id="kode">
          <option selected placeholder="{{$aset->kode_barang}}"></option>
          @foreach ($rekap as $pilihan)
           <option id="select_{{$pilihan->kode}}" value="{{$pilihan->kode}} | {{$pilihan->aset}}">{{$pilihan->kode}}</option>
              <option value="{{$pilihan->kode}} | {{$pilihan->aset}}">{{$pilihan->kode}}</option>
          @endforeach
        </select>
      <input type="text" id="kode_barang" name="kode_barang" class="d-none" placeholder="Kode Barang" readonly>
    </div>

    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang"
        value="{{$aset->nama_barang}}"
            readonly>
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Jumlah</label>
      <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" value="{{$aset->jumlah}}">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Harga</label>
      <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga"  value="{{$aset->harga}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
    <script>
      var kode = {{$aset->kode_barang}}
      var nama = '{{$aset->nama_barang}}'
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
  </form>

@endsection
