<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .tambah {
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>

                <tr>
                    <th>No</th>
                    <th>Guru</th>
                    <th>NIP</th>
                    <th>Kelamin</th>
                    <th>alamat</th>
                    <th>telpon</th>
                    <th>username</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data_guru as $dg)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$dg->nama_guru}}</td>
                    <td>{{$dg->nip_guru}}</td>
                    <td>{{$dg->kelamin_guru}}</td>
                    <td>{{$dg->alamat_guru}}</td>
                    <td>{{$dg->telpon_guru}}</td>
                    <td>{{$dg->username_guru}}</td>
                    <td>{{$dg->password_guru}}</td>
                    <td>
                        <a href="">Edit </a>
                        |
                        <a href=""> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>