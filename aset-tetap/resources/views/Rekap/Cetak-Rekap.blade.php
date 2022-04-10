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
    <title>Cetak Rekapitulasi</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Rekapitulasi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Aset</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            @foreach ($cetakrekap as $item)
                <tr>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->aset }}</td>
                    <td>{{ $item->jmlh }}</td>
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