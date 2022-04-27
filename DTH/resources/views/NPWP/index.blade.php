@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">NPWP</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/DTH/Cetak-DTH" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
    <div class="card-header">
      <div class="card-tools">
        <a href="/NPWP/Create-NPWP" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Import Data</button>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Import Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('NPWP.import')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <input type="file" name="file" required="required">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Import Data</button>
      </div>
    </div>
    </form>
  </div>
</div>

    <div class="card-body text-center">
      <table class="table table-bordered">
        <tr>
          <th>Kode AKun</th>
          <th>Jenis Pajak</th>
          <th>Nominal Pajak</th>
          <th>NPWP</th>
          <th>Nama WP</th>
          <th>NTPN</th>
          <th>ID Billing</th>
          <th>Keperluan</th>
          <th>Action</th>
        </tr>
        {{-- @foreach ($dth as $item)
        <tr>
          <td>{{ $item->kode_akun }}</td>
          <td>{{ $item->jenis_pajak }}</td>
          <td>{{ $item->nominal_pajak }}</td>
          <td>{{ $item->npwp }}</td>
          <td>{{ $item->nama_wp }}</td>
          <td>{{ $item->ntpn }}</td>
          <td>{{ $item->id_billing }}</td>
          <td>{{ $item->keperluan }}</td>
          <td>
            <a href="{{ url('/DTH/Edit-DTH', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/DTH/delete-dth', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach --}}
      </table>
    </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection