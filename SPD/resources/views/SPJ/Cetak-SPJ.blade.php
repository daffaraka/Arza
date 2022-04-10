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
    <title>Cetak SPJ </title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>GU SPJ</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Tanggal Input</th>
                <th >Periode Triwulan</th>
                <th >Tahun</th>
                <th >Kode</th>
                <th >Nama Kegiatan</th>
                <th >GU SPJ Ke</th>
                <th >Nominal</th>
                <th >Total</th>
            </tr>
            @foreach ($cetakguspj as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tgl_input }}</td>
                <td>{{ $item->triwulanke }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->spj_gu_ke }}</td>
                <td>{{ $item->nominal }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>