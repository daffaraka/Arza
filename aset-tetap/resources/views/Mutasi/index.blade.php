@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mutasi Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/Mutasi/Cetak-Mutasi" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span
                        data-feather="printer"></span></a>
                <a href="/Mutasi/Export-Mutasi" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span
                        data-feather="printer"></span></a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="/Mutasi/Create-Mutasi" class="btn btn-success">Tambah Data<i
                            class="fas fa-plus-square"></i></a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Import Data</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Silahkan Import Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/Mutasi/Import-Mutasi" method="post" enctype="multipart/form-data">
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
                        <th colspan="3">Nomor</th>
                        <th colspan="2">Spesifikasi Barang</th>
                        <th rowspan="2">Bahan</th>
                        <th rowspan="2">Cara Perolehan</th>
                        <th rowspan="2">Ukuran Barang</th>
                        <th rowspan="2">Satuan</th>
                        <th rowspan="2">Kondisi</th>
                        <th colspan="2">Mutasi Aset Tahun Ini</th>
                        <th rowspan="2">Action</th>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Register</th>
                        <th>Nama/Jenis Barang</th>
                        <th>Merk/Type</th>
                        <th>Barang</th>
                        <th>Harga</th>
                    </tr>
                    </tr>
                    @foreach ($mutasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->register }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->bahan }}</td>
                            <td>{{ $item->cara_perolehan }}</td>
                            <td>{{ $item->ukuran_barang }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->kondisi }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>Rp {{ $item->harga }}</td>
                            <td>
                                <a href="{{ url('/Mutasi/Edit-Mutasi', $item->id) }}"><span
                                        data-feather="edit"></span></a>
                                |
                                <a href="{{ url('/Mutasi/delete-mutasi', $item->id) }}"><span data-feather="trash-2"
                                        style="color: red"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="fw-bold" style="background-color: #f7f7f7;">
                        <td colspan="11">Total</td>
                        <td id='total_harga'></td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </div>

        <script>
            var mutasi = {!! json_encode($mutasi) !!};
            console.log(mutasi);
            // var jumlah = document.getElementById("total_jumlah");
            var harga = document.getElementById("total_harga");
            // var dataJumlah = [];
            var dataHarga = [];

            if (mutasi.length > 0) {
                for (let i = 0; i < mutasi.length; i++) {
                    // dataJumlah.push(parseInt(mutasi[i].jumlah))
                    dataHarga.push(parseInt(mutasi[i].harga))
                }
            } else {
                // dataJumlah.push(0)
                dataHarga.push(0)
            }

            // const sumJumlah = dataJumlah.reduce(add, 0);
            const sumHarga = dataHarga.reduce(add, 0);

            function add(val, a) {
                return val + a;
            }

            // jumlah.innerHTML = sumJumlah
            harga.innerHTML = `Rp ${sumHarga}`
        </script>

        @include('sweetalert::alert')
    </div>
@endsection
