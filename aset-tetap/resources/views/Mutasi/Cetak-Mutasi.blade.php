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
    <title>Cetak Mutasi Barang</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Mutasi Barang</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th colspan="3">Nomor</th>
                <th colspan="2">Spesifikasi Barang</th>
                <th rowspan="2">Bahan</th>
                <th rowspan="2">Cara Perolehan</th>
                <th rowspan="2">Ukuran Barang</th>
                <th rowspan="2">Satuan</th>
                <th rowspan="2">Kondisi</th>
                <th colspan="2">Mutasi Aset Tahun Ini</th>
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
            @foreach ($cetakmutasi as $item)
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
                    <td>{{ $item->harga }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>