<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        table.static{
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Penerimaan </title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Penerimaan Bulanan</b></p>
        <p align="center"><b>Bulan September</b></p>
        <p align="center"><b>2021</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
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
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>No</th>
                  <th>Tanggal</th>
                </tr>
            </tr>
            @foreach ($cetakpenerimaan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->dari }}</td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal_faktur }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->sumber_dana }}</td>
                <td>{{ $item->banyaknya }}</td>
                <td>{{ $item->harga_satuan }}</td>
                <td>{{ $item->jumlah_harga }}</td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal_penerimaan }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>