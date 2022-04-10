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
    <title>Cetak SPD Triwulan </title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>SPD Triwulan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th >Periode Triwulan</th>
                <th >Tahun</th>
                <th >Kode</th>
                <th >Nama Kegiatan</th>
                <th >Januari</th>
                <th >Februari</th>
                <th >Maret</th>
                <th >Total SPD Berjalan</th>
                <th >Total SPJ Berjalan</th>
                <th >Total SPD Saat Ini</th>
                <th >Total SPJ Saat Ini</th>
                <th >Nominal Belum SPJ</th>
            </tr>
            @foreach ($cetakspdtriwulan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->periode_tri }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jan }}</td>
                <td>{{ $item->feb }}</td>
                <td>{{ $item->mar }}</td>
                <td>{{ $item->total_spd_berjalan }}</td>
                <td>{{ $item->total_spj_berjalan }}</td>
                <td>{{ $item->total_spd_saat_ini }}</td>
                <td>{{ $item->total_spj_saat_ini }}</td>
                <td>{{ $item->nominal_blm_spj }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>