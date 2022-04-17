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
    <title>Cetak Jurnal</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Jurnal Persediaan Barang Habis Pakai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>Tanggal</th>
                <th>Uraian</th>
                <th>Debit</th>
                <th>Kredit</th>
            </tr>
            @foreach ($cetakjurnal as $item)
                <tr>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->uraian }}</td>
                    <td>{{ $item->debit }}</td>
                    <td>{{ $item->kredit }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>