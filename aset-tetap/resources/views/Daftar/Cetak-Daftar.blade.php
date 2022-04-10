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
    <title>Cetak Daftar Aset Tetap</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Daftar Aset Tetap</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th colspan="3">Daftar Aset Tetap Nomor</th>
                <th colspan="3">Spesifikasi Barang</th>
                <th rowspan="2">Harga Beli</th>
                <th rowspan="2">Umur Ekonomis</th>
                <th rowspan="2">Biaya Penyusutan</th>
                <th rowspan="2">Jumlah Barang</th>
                <th colspan="1">Kondisi Barang</th>
                <th rowspan="2">Keterangan</th>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Register</th>
                    <th>Nama Barang</th>
                    <th>Merk/Type Barang</th>
                    <th>Tahun Perolehan</th>
                    <th>B/KB</th>
                </tr>
            </tr>
            @foreach ($cetakdaftar as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->register }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->harga_beli }}</td>
                    <td>{{ $item->umur_ekonomis }}</td>
                    <td>{{ $item->biaya_peny }}</td>
                    <td>{{ $item->jmlh_barang }}</td>
                    <td>{{ $item->kondisi }}</td>
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