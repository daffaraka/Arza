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
        <p align="center"><b>NPWP</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>#</th>
                <th>NPWP</th>
                <th>Nama WP</th>
            </tr>
            @foreach ($cetaknpwp as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->npwp }}</td>
                    <td>{{ $item->nama_wp }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>