@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Rekapitulasi</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/Rekap/Cetak-Rekap" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/Rekap/Export-Rekap" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
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
      <form action="/Rekap/Import-Rekap" method="post" enctype="multipart/form-data">
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
          <th>Kode Barang</th>
          <th>Nama Aset</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Action</th>
        </tr>
        @foreach ($rekap as $item)
        <tr>
          <td>{{ $item->kode }}</td>
          <td>{{ $item->aset }}</td>
          <td>{{ $item->jmlh }}</td>
          <td>{{ $item->harga }}</td>
          <td>
            <a href="{{ url('/Rekap/Edit-Rekap', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/Rekap/delete-rekap', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection