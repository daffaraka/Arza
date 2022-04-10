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
    <title>Cetak Kartu Stok</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Kartu Stok Persediaan Barang Habis Pakai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
          <tr>
            <th rowspan="3">Tanggal</th>
            <th rowspan="3">Nama Barang</th>
          </tr>
          <th colspan="3">Pemasukan</th>
          <th colspan="3">Pengeluaran</th>
          <th colspan="3">Peresediaan</th>
          <th rowspan="2">Keterangan</th>
          <tr>
            <th>Unit</th>
            <th>Harga/Unit</th>
            <th>Total Harga</th>
            <th>Unit</th>
            <th>Harga/Unit</th>
            <th>Total Harga</th>
            <th>Unit</th>
            <th>Harga/Unit</th>
            <th>Total Harga</th>
          </tr>
          @foreach ($cetakkartustok as $item)
          <tr>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->unit_pemasukan }}</td>
            <td>{{ $item->harga_per_unit_pemasukan }}</td>
            <td>{{ $item->total_harga_pemasukan }}</td>
            <td>{{ $item->unit_pengeluaran }}</td>
            <td>{{ $item->harga_per_unit_pengeluaran }}</td>
            <td>{{ $item->total_harga_pengeluaran }}</td>
            <td>{{ $item->unit_persediaan }}</td>
            <td>{{ $item->harga_per_unit_persediaan }}</td>
            <td>{{ $item->total_harga_persediaan }}</td>
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