@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> GU SPJ</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/SPJ/Cetak-SPJ" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/SPJ/Export-SPJ" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
    <div class="card-header">
      <div class="card-tools">
        <a href="/SPJ/Create-SPJ" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
      <form action="/SPJ/Import-SPJ" method="post" enctype="multipart/form-data">
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
          <th >Kode</th>
          <th >Nama Kegiatan</th>
          <th >GU SPJ Ke</th>
          <th >Nominal</th>
          <th >Total</th>
          <th >Action</th>
        </tr>
        @foreach ($guspj as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tgl_input }}</td>
          <td>{{ $item->triwulanke }}</td>
          <td>{{ $item->tahun }}</td>
          <td>{{ $item->kode }}</td>
          <td>{{ $item->nama_kegiatan }}</td>
          <td>{{ $item->spj_gu_ke }}</td>
          <td id="nominal{{ $loop->iteration }}">{{ $item->nominal }}</td>
          <td id="total{{ $loop->iteration }}">{{ $item->total }}</td>
          <td>
            <a href="{{ url('/SPJ/Edit-SPJ', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/SPJ/delete-spj', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
        <tr class="fw-bold" style="background-color: #f7f7f7;">
            <td colspan="8">Total</td>
            <td id='total'></td>
            <td>-</td>
        </tr>
      </table>
    </div>

    <script>
      function thousandSeparator(amount) {
        if (amount) {
          var result = amount
              .toString()
              .replace(/,/g, '')
              .replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        } else {
          var result = 0;
        }
    
        return result;
      }
    </script>

    <script>
      var guspj = {!! json_encode($guspj) !!};
      var total = document.getElementById("total");
      var dataAllTotal = [];

      if (guspj.length > 0) {
          for (let i = 0; i < guspj.length; i++) {
              var dataNominal = document.getElementById("nominal" + (i + 1));
              var dataTotal = document.getElementById("total" + (i + 1));
              var valueNominal = parseInt(dataNominal.innerText);
              var valueTotal = parseInt(dataTotal.innerText);
              dataNominal.innerHTML = `Rp ${thousandSeparator(valueNominal)}`;
              dataTotal.innerHTML = `Rp ${thousandSeparator(valueTotal)}`;

              dataAllTotal.push(parseInt(guspj[i].total))
          }
      } else {
          dataAllTotal.push(0)
      }

      console.log(dataAllTotal);
      const sumTotal = dataAllTotal.reduce(add, 0);

      function add(val, a) {
          return val + a;
      }

      total.innerHTML = `Rp ${thousandSeparator(sumTotal)}`
  </script>

    @include('sweetalert::alert')
</div>

@endsection