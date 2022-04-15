@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peminjaman</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/Peminjaman/Cetak-Peminjaman" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span
                        data-feather="printer"></span></a>
                <a href="/Peminjaman/Export-Peminjaman" target="_blank" class="btn btn-sm btn-outline-secondary">Excel<span
                        data-feather="printer"></span></a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="/Peminjaman/Create-Peminjaman" class="btn btn-success">Tambah Data<i
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
                        <form action="/Peminjaman/Import-Peminjaman" method="post" enctype="multipart/form-data">
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
                        <th>Pihak Peminjam</th>
                        <th>Tanggal Peminjam</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Tahun Perolehan</th>
                        <th>Cara Perolehan</th>
                        <th>Jumlah Barang</th>
                        <th>Harga</th>
                        <th>Kondisi Barang</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($peminjaman as $item)
                        <tr>
                            <td>{{ $item->peminjam }}</td>
                            <td>{{ $item->tgl_pinjam }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->thn_perolehan }}</td>
                            <td>{{ $item->cara_perolehan }}</td>
                            <td>{{ $item->jmlh_barang }}</td>
                            <td>Rp {{ $item->harga }}</td>
                            <td>{{ $item->kondisi_barang }}</td>
                            <td>{{ $item->ket }}</td>
                            <td>
                                <a href="{{ url('/Peminjaman/Edit-Peminjaman', $item->id) }}"><span
                                        data-feather="edit"></span></a>
                                |
                                <a href="{{ url('/Peminjaman/delete-peminjaman', $item->id) }}"><span
                                        data-feather="trash-2" style="color: red"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="fw-bold" style="background-color: #f7f7f7;">
                      <td colspan="6">Total</td>
                      <td id='total_jumlah'></td>
                      <td id='total_harga'></td>
                      <td colspan="3">-</td>
                  </tr>
                </table>
            </div>
        </div>

        <script>
            var peminjaman = {!! json_encode($peminjaman) !!};
            var jumlah = document.getElementById("total_jumlah");
            var harga = document.getElementById("total_harga");
            var dataJumlah = [];
            var dataHarga = [];

            if (peminjaman.length > 0) {
                for (let i = 0; i < peminjaman.length; i++) {
                    dataJumlah.push(parseInt(peminjaman[i].jmlh_barang))
                    dataHarga.push(parseInt(peminjaman[i].harga))
                }
            } else {
                dataJumlah.push(0)
                dataHarga.push(0)
            }

            const sumJumlah = dataJumlah.reduce(add, 0);
            const sumHarga = dataHarga.reduce(add, 0);

            function add(val, a) {
                return val + a;
            }

            jumlah.innerHTML = sumJumlah
            harga.innerHTML = `Rp ${sumHarga}`
        </script>

        @include('sweetalert::alert')
    </div>
@endsection
