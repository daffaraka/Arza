@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jurnal</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/Jurnal/Cetak-Jurnal" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
    <div class="card-header">
      <div class="card-tools">
        <a href="/Jurnal/Create-Jurnal" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
      <form action="/Jurnal/Import-Jurnal" method="post" enctype="multipart/form-data">
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
        {{-- <th>#</th> --}}
        <th>Tanggal</th>
        <th>Keterangan</th>
        <th>Debit</th>
        <th>Kredit</th>
        <th>Action</th>
      </tr>
      @foreach ($jurnal as $item)
      <tr>
        
        <td rowspan="2">{{ $item->tanggal }}</td>
        <td class="text-start">{{ $item->uraian_debit }}</td>
        <td class="text-start">Rp {{ number_format($item->debit) }}</td>
        <td style="background-color: #f7f7f7;"></td>
        <td rowspan="2">
          <a href="{{ url('/Jurnal/Edit-Jurnal', $item->id) }}"><span data-feather="edit"></span></a>
          | 
          <a href="{{ url('/Jurnal/delete-jurnal', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
        </td>
      </tr>
      <tr>
        <td class="text-end">{{ $item->uraian_kredit }}</td>
        <td style="background-color: #f7f7f7;"></td>
        <td class="text-end">Rp {{ number_format($item->kredit) }}</td>
      </tr>
      @endforeach
      <tr class="fw-bold" style="background-color: #f7f7f7;">
        <td colspan="2">Total</td>
        <td id="total_debit"></td>
        <td id="total_kredit"></td>
        <td>
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
  var jurnal = {!! json_encode($jurnal) !!};
  var debit = document.getElementById("total_debit");
  var kredit = document.getElementById("total_kredit");
  var dataDebit = [];
  var dataKredit = [];

  if (jurnal.length > 0) {
      for (let i = 0; i < jurnal.length; i++) {
        dataDebit.push(parseInt(jurnal[i].debit))
        dataKredit.push(parseInt(jurnal[i].kredit))
      }
  } else {
    dataDebit.push(0)
    dataKredit.push(0)
  }

  const sumDebit = dataDebit.reduce(add, 0);
  const sumKredit = dataKredit.reduce(add, 0);

  function add(val, a) {
      return val + a;
  }

  debit.innerHTML = `Rp ${thousandSeparator(sumDebit)}`
  kredit.innerHTML = `Rp ${thousandSeparator(sumKredit)}`
</script>

@include('sweetalert::alert')
</div>
@endsection