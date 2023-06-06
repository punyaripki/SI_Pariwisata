<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data admin</title>

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
    <h1>Data admin</h1>
    <table align="center">
        <thead>
            <tr>

                <th>id admin</th>
                <th>id pemesanan</th>
                <th>id pegawai</th>
                <th>id penilaian</th>
                <th>id wisata</th>

                <th>Nama</th>
                <th>Email</th>

                <th>Password</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_admin }}</td>
                    <td>{{ $row->id_pemesanan }}</td>
                    <td>{{ $row->id_pegawai }}</td>
                    <td>{{ $row->id_penilaian }}</td>
                    <td>{{ $row->id_wisata }}</td>

                    <td>{{ $row->nama_admin }}</td>
                    <td>{{ $row->email_admin }}</td>
                    <td>{{ $row->password_admin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
