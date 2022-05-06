@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kartu Stok</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/KartuStok/Cetak-KartuStok" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/KartuStok/Export-KartuStok" target="_blank" class="btn btn-sm btn-outline-secondary">Export <span data-feather="printer"></span></a>

    </div>
  </div>
</div>

<div class="content">
  
    <div class="card-body text-center">
      <table class="table table-bordered">
        <tr>
          <th rowspan="3">Tanggal</th>
          <th rowspan="3">Nama Barang</th>
        </tr>
          <th colspan="3">Pemasukan</th>
          <th colspan="3">Pengeluaran</th>
          <th colspan="3">Peresediaan</th>
          <th rowspan="2">Keterangan</th>
          <th rowspan="2">Action</th>
        <tr>
          <th>Unit</th>
          <th>Harga/Unit</th>
          <th>Total Harga</th>
          <th>Unit</th>
          <th>Harga/Unit</th>
          <th>Total Harga</th>
          <th>Unit</th>
          <th>Harga/Unit</th>
          <th>Total Harga</th>
        </tr>
        @foreach ($kartustok as $item)
        <tr>
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->nama_barang }}</td>
          @if (empty($item->unit_pemasukan && $item->harga_per_unit_pemasukan && $item->total_harga_pemasukan))
          <td colspan="3"> - <br>
            {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
          </td>

          @else
            <td>{{ $item->unit_pemasukan }}</td>
            <td>Rp {{number_format($item->harga_per_unit_pemasukan) }}</td>
            <td>Rp {{ $item->total_harga_pemasukan }}</td>
          @endif
        
          
          @if (empty($item->unit_pengeluaran && $item->harga_per_unit_pengeluaran && $item->total_harga_pengeluaran))
            <td colspan="3"> - <br>
              {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
            </td>

          @else
            <td>{{ $item->unit_pengeluaran }}</td>
            <td>Rp {{ $item->harga_per_unit_pengeluaran }}</td>
            <td>Rp {{ $item->total_harga_pengeluaran }}</td>
          @endif
          <td>{{ $item->unit_persediaan }}</td>
          <td>Rp {{ $item->harga_per_unit_persediaan }}</td>
          <td>Rp {{ $item->total_harga_persediaan }}</td>
          <td>{{ $item->keterangan }}</td>
          <td>
            <a href="{{ url('/KartuStok/Edit-KartuStok', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/KartuStok/delete-kartustok', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

  @include('sweetalert::alert')
</div>
@endsection