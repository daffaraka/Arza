@extends('dashboard.layouts.main')
<title>DTH</title>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">DTH</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/DTH/Cetak-DTH" target="_blank" class="btn btn-sm btn-outline-secondary">PDF <span data-feather="printer"></span></a>
    </div>
    {{-- <div class="btn-group me-2">
      <a href="/DTH/Export-DTH" target="_blank" class="btn btn-sm btn-outline-secondary">Excel <span data-feather="printer"></span></a>
    </div> --}}
  </div>
</div>

<div class="content">
  <div class="card card-info card-outline">
    <div class="card-header">
      <div class="card-tools">
        <a href="/DTH/Create-DTH" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
          <form action="/DTH/Import-DTH" method="post" enctype="multipart/form-data">
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
    <div class="px-3 pt-3">
      <form method="get" action="{{route('search')}}">
        <div class="d-flex align-items-center justify-content-end">
          <div class="me-3">
            <input type="text" required class="form-control" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}" placeholder="Pencarian">
          </div>
          <button type="submit" class="btn btn-primary">Pencarian</button>
        </div>
      </form>
    </div>

    <script>
      var dth = {!! json_encode($searchResults) !!};
      console.log(dth);
    </script>
    <div class="card-body text-center">
      <table class="table table-bordered">
        <tr>
          <th>Kode AKun</th>
          <th>Jenis Pajak</th>
          <th>Nominal Pajak</th>
          <th>NPWP</th>
          <th>Nama WP</th>
          <th>NTPN</th>
          <th>ID Billing</th>
          <th>Keperluan</th>
          <th>Bulan</th>
          <th>Triwulan</th>
          <th>Action</th>
        </tr>
        @foreach ($searchResults as $item)
        <tr>
          <td>{{ $item->searchable->kode_akun }}</td>
          <td>{{ $item->searchable->jenis_pajak }}</td>
          <td>Rp {{ $item->searchable->nominal_pajak }}</td>
          <td>{{ $item->searchable->npwp }}</td>
          <td>{{ $item->searchable->nama_wp }}</td>
          <td>{{ $item->searchable->ntpn }}</td>
          <td>{{ $item->searchable->id_billing }}</td>
          <td>{{ $item->searchable->keperluan }}</td>
          <td>{{ $item->searchable->bulan}}</td>
          <td>{{ $item->searchable->triwulan}}</td>
          <td>
            <a href="{{ url('/DTH/Edit-DTH', $item->searchable->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/DTH/delete-dth', $item->searchable->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
        <tr>
          <td class="bg-light fw-bold" colspan="2">Total</td>
          <td class="bg-light fw-bold" id="total_nominal">0</td>
          <td colspan="8"></td>
        </tr>
      </table>
    </div>
  </div>

  <script>
    var data = {!! json_encode($searchResults) !!};
    var total = document.getElementById("total_nominal");
    var dataNominal = [];

    if (data.length > 0) {
        for (let i = 0; i < data.length; i++) {
            dataNominal.push(parseInt(data[i].searchable.nominal_pajak))
        }
    } else {
        dataNominal.push(0)
    }

    const sumNominal = dataNominal.reduce(add, 0);

    function add(val, a) {
        return val + a;
    }

    total.innerHTML = `Rp ${sumNominal}`
</script>

  @include('sweetalert::alert')
</div>

@endsection