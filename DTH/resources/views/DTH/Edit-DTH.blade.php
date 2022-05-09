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
            <option value="bagus">Code</option>
        </select>
      </div>
      <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Jenis Pajak</label>
        <select class="form-select" aria-label="Default select example" id="jenis_pajak" name="jenis_pajak">
            <option selected disabled>- Pilih Jenis Pajak -</option>
            <option value="bagus">Code</option>
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
    </div>
    <div class="form-group mb-2">
        <label for="text" class="col-sm-2 col-form-label">Nama WP</label>
        <select class="form-select" aria-label="Default select example" id="nama_wp" name="nama_wp">
            <option selected disabled>- Pilih Nama NPWP -</option>
            <option value="bagus">$npwp->nama_wp</option>
        </select>
        <input type="text" id="nama_wp" name="nama_wp" class="d-none" placeholder="Nama WP" readonly>
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

@endsection