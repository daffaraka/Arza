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
          <td rowspan="2">{{ $item->tanggal }}</td>
          <td rowspan="2">{{ $item->nama_barang }}</td>
          
          @if (empty($item->unit_pemasukan && $item->harga_per_unit_pemasukan && $item->total_harga_pemasukan))
            <td colspan="3"> - <br>
              {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
            </td>
          @else
            <td>{{ $item->unit_pemasukan }}</td>
            <td>Rp {{ number_format($item->harga_per_unit_pemasukan) }}</td>
            <td>Rp {{ number_format($item->total_harga_pemasukan) }}</td>
          @endif
        
          <td></td>
          <td></td>
          <td></td>
          
          @if (empty($item->unit_pemasukan && $item->harga_per_unit_pemasukan && $item->total_harga_pemasukan))
            <td colspan="3"> - <br>
              {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
            </td>
          @else
            <td>{{ $item->unit_pemasukan }}</td>
            <td>Rp {{ number_format($item->harga_per_unit_pemasukan) }}</td>
            <td>Rp {{ number_format($item->total_harga_pemasukan) }}</td>
          @endif
          
          <td>{{ $item->keterangan }}</td>
          <td rowspan="2">
            <a href="{{ url('/KartuStok/Edit-KartuStok', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/KartuStok/delete-kartustok', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          
          @if (empty($item->unit_pengeluaran && $item->harga_per_unit_pengeluaran && $item->total_harga_pengeluaran))
            <td colspan="3"> - <br>
              {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
            </td>

          @else
            <td>{{ $item->unit_pengeluaran }}</td>
            <td>Rp {{ number_format($item->harga_per_unit_pengeluaran) }}</td>
            <td>Rp {{ number_format($item->total_harga_pengeluaran) }}</td>
          @endif

          @if (empty($item->unit_pengeluaran && $item->harga_per_unit_pengeluaran && $item->total_harga_pengeluaran))
            <td colspan="3"> - <br>
              {{-- <a href="{{url('/KartuStok/Tambah-Pengeluaran', $item->id)}}"><span data-feather="edit"></span> </a>  --}}
            </td>

          @else
            <td>{{ $item->unit_pengeluaran }}</td>
            <td>Rp {{ number_format($item->harga_per_unit_pengeluaran) }}</td>
            <td>Rp {{ number_format($item->total_harga_pengeluaran) }}</td>
          @endif
          
          <td></td>
        </tr>
        @endforeach
        <tr class="fw-bold" style="background-color: #f7f7f7;">
          <td colspan="4">Total</td>
          <td id="total_pemasukan"></td>
          <td colspan="2">
            -
          </td>
          <td id="total_pengeluaran"></td>
          <td colspan="2">
            -
          </td>
          <td id="total_persediaan"></td>
          <td colspan="2">
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
    var kartustok = {!! json_encode($kartustok) !!};
    var totalPemasukan = document.getElementById("total_pemasukan");
    var totalPengeluaran = document.getElementById("total_pengeluaran");
    var totalPersediaan = document.getElementById("total_persediaan");
    var dataTotalPemasukan = [];
    var dataTotalPengeluaran = [];
    var dataTotalPersediaan = [];
  
    if (kartustok.length > 0) {
        for (let i = 0; i < kartustok.length; i++) {
          dataTotalPemasukan.push(parseInt(kartustok[i].total_harga_pemasukan))
          dataTotalPengeluaran.push(parseInt(kartustok[i].total_harga_pengeluaran))
          dataTotalPersediaan.push(parseInt(kartustok[i].total_harga_persediaan))
        }
    } else {
        dataTotalPemasukan.push(parseInt(0))
        dataTotalPengeluaran.push(parseInt(0))
        dataTotalPersediaan.push(parseInt(0))
    }
  
    const sumPemasukan = dataTotalPemasukan.reduce(add, 0);
    const sumPengeluaran = dataTotalPengeluaran.reduce(add, 0);
    const sumPersediaan = dataTotalPersediaan.reduce(add, 0);
  
    function add(val, a) {
        return val + a;
    }
  
    totalPemasukan.innerHTML = `Rp ${thousandSeparator(sumPemasukan)}`
    totalPengeluaran.innerHTML = `Rp ${thousandSeparator(sumPengeluaran)}`
    totalPersediaan.innerHTML = `Rp ${thousandSeparator(sumPersediaan)}`
  </script>

  @include('sweetalert::alert')
</div>
@endsection