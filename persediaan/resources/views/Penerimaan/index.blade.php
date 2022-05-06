@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Penerimaan</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/Penerimaan/Cetak-Penerimaan" target="_blank" class="btn btn-sm btn-outline-secondary">PDF <span data-feather="printer"></span></a>
      <a href="/Penerimaan/Export-Penerimaan" target="_blank" class="btn btn-sm btn-outline-secondary">Excel <span data-feather="printer"></span></a>

    </div>
  </div>
</div>

<div class="content">
  <div class="card-header">
    <div class="card-tools">
      <a href="/Penerimaan/Create-Penerimaan" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
    </div>
  </div>
    <div class="card-body text-center">
      <table class="table table-bordered">
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2">Tanggal</th>
          <th rowspan="2">Dari</th>
          <th colspan="2">Dokumen Faktur</th>
          <th rowspan="2">Nama Barang</th>
          <th rowspan="2">Sumber Dana</th>
          <th rowspan="2">Banyaknya</th>
          <th rowspan="2">Harga Satuan</th>
          <th rowspan="2">Jumlah Harga</th>
          <th colspan="2">Bukti Penerimaan</th>
          <th rowspan="2">Keterangan</th>
          <th rowspan="2">Action</th>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>No</th>
            <th>Tanggal</th>
          </tr>
        </tr>
        @foreach ($penerimaan as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->dari }}</td>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tanggal_faktur }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->sumber_dana }}</td>
          <td>{{ $item->banyaknya }}</td>
          <td>Rp {{ number_format($item->harga_satuan) }}</td>
          <td>Rp {{ number_format($item->jumlah_harga) }}</td>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tanggal_penerimaan }}</td>
          <td>{{ $item->keterangan }}</td>
          <td>
            <a href="{{ url('/Penerimaan/Edit-Penerimaan', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/Penerimaan/delete-penerimaan', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
        <tr class="fw-bold" style="background-color: #f7f7f7;">
          <td colspan="9">Total</td>
          <td id="total"></td>
          <td colspan="4">
            -
          </td>
        </tr>
      </table>
    </div>
  </div>

  <script>
    function thousandSeparator(amount) {
      if (amount) {
        var result = amount
            .toString()
            .replace(/,/g, '')
            .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
      } else {
        var result = 0;
      }
  
      return result;
    }
  </script>
  
  <script>
    var penerimaan = {!! json_encode($penerimaan) !!};
    var total = document.getElementById("total");
    var dataTotal = [];
  
    if (penerimaan.length > 0) {
        for (let i = 0; i < penerimaan.length; i++) {
          dataTotal.push(parseInt(penerimaan[i].jumlah_harga))
        }
    } else {
      dataTotal.push(0)
    }
  
    const sumTotal = dataTotal.reduce(add, 0);
  
    function add(val, a) {
        return val + a;
    }
  
    total.innerHTML = `Rp ${thousandSeparator(sumTotal)}`
  </script>

  @include('sweetalert::alert')
</div>

@endsection