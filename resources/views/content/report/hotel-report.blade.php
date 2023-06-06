<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data hotel</title>

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
    <h1>Data hotel</h1>
    <table align="center">
        <thead>
            <tr>

                <th>id_hotel</th>
                <th>Penilaian</th>
                <th>jenis Hotel</th>
                <th>nama Hotel</th>
                <th>Alamat</th>
                <th>No hp</th>
                <th>Banyak kamar</th>
                <th>No kamar</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_hotel }}</td>
                    <td>{{ $row->id_penilaian }}</td>
                    <td>{{ $row->id_jenishotel }}</td>
                    <td>{{ $row->nama_hotel }}</td>
                    <td>{{ $row->alamat_hotel }}</td>
                    <td>{{ $row->no_hp }}</td>
                    <td>{{ $row->banyak_kamar }}</td>
                    <td>{{ $row->no_kamar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
