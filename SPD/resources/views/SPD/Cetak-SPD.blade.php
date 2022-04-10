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
    <title>Cetak SPD </title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>GU SPD</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <<th>No</th>
                <th>Tanggal Input</th>
                <th >Periode Triwulan</th>
                <th >Tahun</th>
                <th >Kode Rekening</th>
                <th >Nama Kegiatan</th>
                <th >Bulan 1</th>
                <th >Nominal 1</th>
                <th >Bulan 2</th>
                <th >Nominal 2</th>
                <th >Bulan 3</th>
                <th >Nominal 3</th>
                <th >Jumlah Nominal</th>
            </tr>
            @foreach ($cetakguspd as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tgl_input }}</td>
                <td>{{ $item->periode_triwulan }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kode_rek }}</td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->bulan1 }}</td>
                <td>{{ $item->nominal_bulan1 }}</td>
                <td>{{ $item->bulan2 }}</td>
                <td>{{ $item->nominal_bulan2 }}</td>
                <td>{{ $item->bulan3 }}</td>
                <td>{{ $item->nominal_bulan3 }}</td>
                <td>{{ $item->jumlah_spd }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>