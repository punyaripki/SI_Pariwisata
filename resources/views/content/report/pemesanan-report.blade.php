<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data pemesanan</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #0d47a1;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data pemesanan</h1>
    <table align="center">
        <thead>
            <tr>

                <th>id_pemesanan</th>
                <th>id_hotel</th>
                <th>no kamar</th>
                <th>id type</th>

                <th>waktu pemesanan</th>
                <th>tanggal pemesanan</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>

                    <td>{{ $row->id_pemesanan }}</td>
                    <td>{{ $row->id_hotel }}</td>
                    <td>{{ $row->no_kamar }}</td>
                    <td>{{ $row->id_jenis }}</td>
                    <td>{{ $row->waktu_pemesanan }}</td>
                    <td>{{ $row->tanggal_pemesanan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
