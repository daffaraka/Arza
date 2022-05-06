@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Pengeluaran</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/Pengeluaran/Cetak-Pengeluaran" target="_blank" class="btn btn-sm btn-outline-secondary">PDF <span data-feather="printer"></span></a>
      <a href="/Pengeluaran/Export-Pengeluaran" target="_blank" class="btn btn-sm btn-outline-secondary">Export <span data-feather="printer"></span></a>

    </div>
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
    <div class="card-header">
      <div class="card-tools">
        <a href="/Pengeluaran/Create-Pengeluaran" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
      </div>
    </div>
    <div class="card-body text-center">
      <table class="table table-bordered">
        <tr>
          <th>No Urut</th>
          <th>Nama Barang</th>
          <th>Sumber Dana</th>
          <th>Banyaknya</th>
          <th>Harga Satuan</th>
          <th>Jumlah Harga</th>
          <th>Untuk</th>
          <th>Tanggal Penyerahan</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
        @foreach ($pengeluaran as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->sumber_dana }}</td>
          <td>{{ $item->banyaknya }}</td>
          <td>Rp {{ number_format($item->harga_satuan) }}</td>
          <td>Rp {{ number_format($item->jumlah_harga) }}</td>
          <td>{{ $item->untuk }}</td>
          <td>{{ $item->tanggal_penyerahan }}</td>
          <td>{{ $item->keterangan }}</td>
          <td>
            <a href="{{ url('/Pengeluaran/Edit-Pengeluaran', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/Pengeluaran/delete-pengeluaran', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
        <tr class="fw-bold" style="background-color: #f7f7f7;">
          <td colspan="5">Total</td>
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
    var penerimaan = {!! json_encode($pengeluaran) !!};
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