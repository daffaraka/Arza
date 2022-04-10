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
    <title>Cetak Target Triwulan </title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Target Triwulan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Tanggal Input</th>
                <th >Periode Triwulan</th>
                <th >Tahun</th>
                <th >Kode</th>
                <th >Nama Kegiatan</th>
                <th >Nominal SPD Berlalu</th>
                <th >Nominal SPD Berjalan</th>
                <th >Total SPD</th>
                <th >Nominal SPJ Berlalu</th>
                <th >Nominal SPJ Berjalan</th>
                <th >Total SPJ</th>
                <th >Nominal Belum SPJ</th>
            </tr>
            @foreach ($cetaktarget as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tgl_input }}</td>
                <td>{{ $item->triwulanke }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nominal_spd_berlalu }}</td>
                <td>{{ $item->nominal_spd_berjalan }}</td>
                <td>{{ $item->total_spd }}</td>
                <td>{{ $item->nominal_spj_berlalu }}</td>
                <td>{{ $item->nominal_spj_berjalan }}</td>
                <td>{{ $item->total_spj }}</td>
                <td>{{ $item->nominal_belum_spj }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>