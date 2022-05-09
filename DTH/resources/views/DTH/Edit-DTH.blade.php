@extends('dashboard.layouts.main')
<title>Edit DTH</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">DTH</h1>
</div>

<h5 class="mt-3 mb-3"> Edit DTH</h5>

  <form action="{{ url('DTH/update_dth', $dth->id) }}" method="POST">
    
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Kode Akun</label>
        <select class="form-select" aria-label="Default select example"  id="kode_akun" name="kode_akun">
            <option selected disabled>- Pilih Kode Akun -</option>
            <option value="411211" {{$dth->kode_akun == '411211' ? 'selected' : ''}}>411211</option>
            <option value="411121" {{$dth->kode_akun == '411121' ? 'selected' : ''}}>411121</option>
            <option value="411124" {{$dth->kode_akun == '411124' ? 'selected' : ''}}>411124</option>
            <option value="411122" {{$dth->kode_akun == '411122' ? 'selected' : ''}}>411122</option>
        </select>
      </div>
      <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jenis Pajak</label>
        <select class="form-select" aria-label="Default select example" id="jenis_pajak" name="jenis_pajak">
            <option selected disabled>- Pilih Jenis Pajak -</option>
            <option value="100" {{$dth->jenis_pajak == '100' ? 'selected' : ''}}>100</option>
            <option value="920" {{$dth->jenis_pajak == '920' ? 'selected' : ''}}>920</option>
            <option value="420" {{$dth->jenis_pajak == '420' ? 'selected' : ''}}>420</option>
            <option value="104" {{$dth->jenis_pajak == '104' ? 'selected' : ''}}>104</option>
        </select>
      </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Nominal Pajak</label>
        <input type="number" id="nominal_pajak" name="nominal_pajak" class="form-control" placeholder="Nominal Pajak" value="{{$dth->nominal_pajak}}">
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">NPWP</label>
        <select class="form-select" aria-label="Default select example" id="npwp" name="npwp">
            <option selected disabled>- Pilih NPWP -</option>
            @foreach ($npwp as $option)
            <option value="bagus">{{$option->npwp}}</option>
            @endforeach
        </select>
        <input type="text" id="npwp" name="npwp" class="d-none" placeholder="Keperluan">
    </div>
    <div class="form-group mb-2">
      <label for="text" class="col-sm-2 col-form-label">Nama WP</label>
      <input type="text" id="nama_wp" name="nama_wp" class="form-control" placeholder="Nama WP" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Bulan</label>
        <select class="form-select" aria-label="Default select example" id="select_bulan">
            <option selected disabled>- Pilih Bulan -</option>
            <option value="1 | Januari">Januari</option>
            <option value="1 | Februari">Februari</option>
            <option value="1 | Maret">Maret</option>
            <option value="2 | April">April</option>
            <option value="2 | Mei">Mei</option>
            <option value="2 | Juni">Juni</option>
            <option value="3 | Juli">Juli</option>
            <option value="3 | Agustus">Agustus</option>
            <option value="3 | September">September</option>
            <option value="4 | Oktober">Oktober</option>
            <option value="4 | November">November</option>
            <option value="4 | Desember">Desember</option>
        </select>
        <input type="text" id="bulan" name="bulan" class="d-none" placeholder="Keperluan">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Triwulan</label>
        <input type="text" id="triwulan" name="triwulan" class="form-control" placeholder="Triwulan ke" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">NTPN</label>
        <input type="number" id="ntpn" name="ntpn" class="form-control" placeholder="NTPN" value="{{$dth->ntpn}}">
    </div>
    <div class="form-group mb-2">
        <label for="number" class="col-sm-2 col-form-label">Id Billing</label>
        <input type="number" id="id_billing" name="id_billing" class="form-control" placeholder="Id Billing" value="{{$dth->id_billing}}">
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Keperluan</label>
        <input type="text" id="keperluan" name="keperluan" class="form-control" placeholder="Keperluan" value="{{$dth->keperluan}}">
    </div>

    <div class="form-group mb-4">
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>

  <script>
    var selectNPWP = document.getElementById("select_npwp");
    var inputNPWP = document.getElementById("npwp");
    var inputNamaNPWP = document.getElementById("nama_wp");

    var selectBulan = document.getElementById("select_bulan");
    var inputBulan = document.getElementById("bulan");
    var inputTriwulan = document.getElementById("triwulan");

    selectNPWP.addEventListener("change", function() {
      inputNPWP.value = selectNPWP.value.split(" | ")[0];
      inputNamaNPWP.value = selectNPWP.value.split(" | ")[1];
    });

    selectBulan.addEventListener("change", function() {
      inputBulan.value = selectBulan.value.split(" | ")[1];
      inputTriwulan.value = selectBulan.value.split(" | ")[0];
    });
  </script>

@endsection