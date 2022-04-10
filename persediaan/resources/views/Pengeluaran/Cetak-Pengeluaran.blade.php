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
    <title>Cetak Pengeluaran</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Pengeluaran Bulanan</b></p>
        <p align="center"><b>Bulan September</b></p>
        <p align="center"><b>2021</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
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
            </tr>
            @foreach ($cetakpengeluaran as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->sumber_dana }}</td>
                <td>{{ $item->banyaknya }}</td>
                <td>{{ $item->harga_satuan }}</td>
                <td>{{ $item->jumlah_harga }}</td>
                <td>{{ $item->untuk }}</td>
                <td>{{ $item->tanggal_penyerahan }}</td>
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