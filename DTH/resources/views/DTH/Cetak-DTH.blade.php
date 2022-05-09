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
    <title>Cetak DTH</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>DTH</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Kode Akun</th>
                <th>Jenis Pajak</th>
                <th>Nominal Pajak</th>
                <th>NPWP</th>
                <th>Nama WP</th>
                <th>NTPN</th>
                <th>ID Billing</th>
                <th>Keperluan</th>
            </tr>
            @foreach ($cetakdth as $item)
                <tr>
                    <td>{{ $item->kode_akun }}</td>
                    <td>{{ $item->jenis_pajak }}</td>
                    <td>{{ $item->nominal_pajak }}</td>
                    <td>{{ $item->npwp }}</td>
                    <td>{{ $item->nama_wp }}</td>
                    <td>{{ $item->ntpn }}</td>
                    <td>{{ $item->id_billing }}</td>
                    <td>{{ $item->keperluan }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    
    window.print();

    
    </script>
    
</body>
</html>