@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Barang</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/DaftarBarang/Cetak-Barang" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
    <div class="card-header">
      <div class="card-tools">
        <a href="/DaftarBarang/Create-Barang" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
      <form action="/DaftarBarang/Import-Barang" method="post" enctype="multipart/form-data">
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
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Action</th>
        </tr>
        @foreach ($daftarbarang as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->jenis_barang }}</td>
          <td>
            <a href="{{ url('/DaftarBarang/Edit-Barang', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/DaftarBarang/delete-barang', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection