@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> GU SPD</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/SPD/Cetak-SPD" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span data-feather="printer"></span></a>
      <a href="/SPD/Export-SPD" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span data-feather="printer"></span></a>
    </div>
  </div>
</div>

<div class="content">
    <div class="card-header">
      <div class="card-tools">
        <a href="/SPD/Create-SPD" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
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
      <form action="/SPD/Import-SPD" method="post" enctype="multipart/form-data">
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
          <th >Kode Rekening</th>
          <th >Nama Kegiatan</th>
          <th >Bulan 1</th>
          <th >Nominal 1</th>
          <th >Bulan 2</th>
          <th >Nominal 2</th>
          <th >Bulan 3</th>
          <th >Nominal 3</th>
          {{-- <th >Bulan 4</th>
          <th >Nominal 4</th> --}}
          <th >Jumlah Nominal</th>
          <th >Action</th>
        </tr>
        @foreach ($guspd as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tgl_input }}</td>
          <td>{{ $item->periode_triwulan }}</td>
          <td>{{ $item->tahun }}</td>
          <td>{{ $item->kode_rek }}</td>
          <td>{{ $item->nama_kegiatan }}</td>
          <td>{{ $item->bulan1 }}</td>
          <td id="nominal1_{{ $loop->iteration }}">{{ $item->nominal_bulan1 }}</td>
          <td>{{ $item->bulan2 }}</td>
          <td id="nominal2_{{ $loop->iteration }}">{{ $item->nominal_bulan2 }}</td>
          <td>{{ $item->bulan3 }}</td>
          <td id="nominal3_{{ $loop->iteration }}">{{ $item->nominal_bulan3 }}</td>
          {{-- <td>{{ $item->bulan4 }}</td>
          <td>{{ $item->nominal_bulan4 }}</td> --}}
          <td id="nominal_{{ $loop->iteration }}">{{ $item->jumlah_spd }}</td>
          <td>
            <a href="{{ url('/SPD/Edit-SPD', $item->id) }}"><span data-feather="edit"></span></a>
            | 
            <a href="{{ url('/SPD/delete-spd', $item->id) }}"><span data-feather="trash-2" style="color: red"></span></a>
          </td>
        </tr>
        @endforeach
        <tr class="fw-bold" style="background-color: #f7f7f7;">
            <td colspan="6">Total</td>
            <td>Bulan</td>
            <td id='total_1'></td>
            <td>Bulan</td>
            <td id='total_2'></td>
            <td>Bulan</td>
            <td id='total_3'></td>
            {{-- <td>Bulan</td>
            <td id='total_4'></td> --}}
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
      var guspd = {!! json_encode($guspd) !!};
      var total1 = document.getElementById("total_1");
      var total2 = document.getElementById("total_2");
      var total3 = document.getElementById("total_3");
      var total = document.getElementById("total");
      var dataTotal1 = [];
      var dataTotal2 = [];
      var dataTotal3 = [];
      var dataTotal = [];

      if (guspd.length > 0) {
          for (let i = 0; i < guspd.length; i++) {
              var data1 = document.getElementById("nominal1_" + (i + 1));
              var data2 = document.getElementById("nominal2_" + (i + 1));
              var data3 = document.getElementById("nominal3_" + (i + 1));
              var data = document.getElementById("nominal_" + (i + 1));
              var value1 = parseInt(data1.innerText);
              var value2 = parseInt(data2.innerText);
              var value3 = parseInt(data3.innerText);
              var value = parseInt(data.innerText);
              data1.innerHTML = `Rp ${thousandSeparator(value1)}`;
              data2.innerHTML = `Rp ${thousandSeparator(value2)}`;
              data3.innerHTML = `Rp ${thousandSeparator(value3)}`;
              data.innerHTML = `Rp ${thousandSeparator(value)}`;

              dataTotal1.push(parseInt(guspd[i].nominal_bulan1))
              dataTotal2.push(parseInt(guspd[i].nominal_bulan2))
              dataTotal3.push(parseInt(guspd[i].nominal_bulan3))
              dataTotal.push(parseInt(guspd[i].jumlah_spd))
          }
      } else {
          dataTotal1.push(0)
          dataTotal2.push(0)
          dataTotal3.push(0)
          dataTotal.push(0)
      }

      const sumTotal1 = dataTotal1.reduce(add, 0);
      const sumTotal2 = dataTotal2.reduce(add, 0);
      const sumTotal3 = dataTotal3.reduce(add, 0);
      const sumTotal = dataTotal.reduce(add, 0);

      function add(val, a) {
          return val + a;
      }

      total1.innerHTML = `Rp ${thousandSeparator(sumTotal1)}`
      total2.innerHTML = `Rp ${thousandSeparator(sumTotal2)}`
      total3.innerHTML = `Rp ${thousandSeparator(sumTotal3)}`
      total.innerHTML = `Rp ${thousandSeparator(sumTotal)}`
  </script>

    @include('sweetalert::alert')
</div>

@endsection