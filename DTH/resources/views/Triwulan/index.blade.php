@extends('dashboard.layouts.main')
<title>Data Triwulan</title>
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Triwulan</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/DTH/Cetak-Triwulan" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span
                        data-feather="printer"></span></a>
            </div>
        </div> --}}
    </div>

    <script>
        var quarter = {!! json_encode($groupedQuarterly) !!};
        console.log(quarter);
    </script>

    @foreach ($groupedQuarterly as $i => $quarter)
        <div>

            {{-- Quarter {{ $i == '1' }}
      @foreach ($quarter as $data)
        @if ($data['bulan'] == 'Januari')
            <h1>ada januari</h1>
        @endif
        @if ($data['bulan'] == 'Juli')
            <h1>ada juli</h1>
        @endif
        
      @endforeach --}}

            @foreach ($quarter as $data)
                {{-- <div class="card mb-4">
                    <div class="px-3 py-4 fw-bold bg-light fs-5" role="button" data-bs-toggle="collapse"
                        data-bs-target="#triwulan-1" aria-expanded="false" aria-controls="triwulan-1">Triwulan 1</div>
                    <div class="collapse" id="triwulan-1">
                        <div class="p-3">
                            <div class="mb-3">
                                <button class="btn btn-primary" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#januari" aria-expanded="false" aria-controls="januari">
                                    Januari
                                </button>
                                <div class="collapse" id="januari">
                                    <div class="text-center pt-3 pb-2 mb-4 border-bottom border-1">
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
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#februari" aria-expanded="false" aria-controls="februari">
                                    Februari
                                </button>
                                <div class="collapse" id="februari">
                                    <div class="text-center pt-3 pb-2 mb-4 border-bottom border-1">
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
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            @endforeach
    @endforeach
@endsection
