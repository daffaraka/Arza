@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> SPD-Triwulan</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/SPD-Triwulan/Cetak-Triwulan" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/SPD-Triwulan/Export-Triwulan" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
    <div class="card-header">
      <div class="card-tools">
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
      <form action="/SPD-Triwulan/Import-Triwulan" method="post" enctype="multipart/form-data">
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
          <th >Periode Triwulan</th>
          <th >Tahun</th>
          <th >Kode</th>
          <th >Nama Kegiatan</th>
          <th >Januari</th>
          <th >Februari</th>
          <th >Maret</th>
          <th >Total SPD Berjalan</th>
          <th >Total SPJ Berjalan</th>
          <th >Total SPD Saat Ini</th>
          <th >Total SPJ Saat Ini</th>
          <th >Nominal Belum SPJ</th>
          <th >Action</th>
        </tr>
        @foreach ($spd_triwulan as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->periode_tri }}</td>
          <td>{{ $item->tahun }}</td>
          <td>{{ $item->kode }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->jan }}</td>
          <td>{{ $item->feb }}</td>
          <td>{{ $item->mar }}</td>
          <td>{{ $item->total_spd_berjalan }}</td>
          <td>{{ $item->total_spj_berjalan }}</td>
          <td>{{ $item->total_spd_saat_ini }}</td>
          <td>{{ $item->total_spj_saat_ini }}</td>
          <td>{{ $item->nominal_blm_spj }}</td>
          <td>
            <a href="{{ url('/SPD-Triwulan/Edit-Triwulan', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/SPD-Triwulan/delete-triwulan', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

    @include('sweetalert::alert')
</div>

@endsection