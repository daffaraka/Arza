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
    <title>Cetak Peminjaman</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Peminjaman</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Pihak Peminjam</th>
                <th>Tanggal Peminjam</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Tahun Perolehan</th>
                <th>Cara Perolehan</th>
                <th>jumlah barang</th>
                <th>Harga</th>
                <th>Kondisi Barang</th>
                <th>Ket</th>
            </tr>
            @foreach ($cetakpeminjaman as $item)
                <tr>
                    <td>{{ $item->peminjam }}</td>
                    <td>{{ $item->tgl_pinjam }}</td>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->thn_perolehan }}</td>
                    <td>{{ $item->cara_perolehan }}</td>
                    <td>{{ $item->jmlh_barang }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->kondisi_barang }}</td>
                    <td>{{ $item->ket }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>