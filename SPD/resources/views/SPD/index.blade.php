@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> GU SPD</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/SPD/Cetak-SPD" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/SPD/Export-SPD" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
    <div class="card-header">
      <div class="card-tools">
        <a href="/SPD/Create-SPD" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
      <form action="/SPD/Import-SPD" method="post" enctype="multipart/form-data">
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
          <th>No</th>
          <th>Tanggal Input</th>
          <th >Periode Triwulan</th>
          <th >Tahun</th>
          <th >Kode Rekening</th>
          <th >Nama Kegiatan</th>
          <th >Bulan 1</th>
          <th >Nominal 1</th>
          <th >Bulan 2</th>
          <th >Nominal 2</th>
          <th >Bulan 3</th>
          <th >Nominal 3</th>
          <th >Jumlah Nominal</th>
          <th >Action</th>
        </tr>
        @foreach ($guspd as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tgl_input }}</td>
          <td>{{ $item->periode_triwulan }}</td>
          <td>{{ $item->tahun }}</td>
          <td>{{ $item->kode_rek }}</td>
          <td>{{ $item->nama_kegiatan }}</td>
          <td>{{ $item->bulan1 }}</td>
          <td>{{ $item->nominal_bulan1 }}</td>
          <td>{{ $item->bulan2 }}</td>
          <td>{{ $item->nominal_bulan2 }}</td>
          <td>{{ $item->bulan3 }}</td>
          <td>{{ $item->nominal_bulan3 }}</td>
          <td>{{ $item->jumlah_spd }}</td>
          <td>
            <a href="{{ url('/SPD/Edit-SPD', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/SPD/delete-spd', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

    @include('sweetalert::alert')
</div>

@endsection