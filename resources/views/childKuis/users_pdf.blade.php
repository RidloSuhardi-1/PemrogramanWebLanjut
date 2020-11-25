<!DOCTYPE html>
<html>

<head>
    <title>User PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            font-size: 8pt;
        }
    </style>
    <main role="main"><br><br>

        <?php $total; ?>
        <table class="table table-sm table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="7" class="text-center" scope="col">LAPORAN USER NGODINGERS</th>
                </tr>
                <tr>
                    <td colspan="5" scope="col">Dicetak pada : <?php echo date("l, d F Y h:i:s A"); ?></td>
                    <td align="left" scope="col">Di cetak oleh</td>
                    <td align="center" scope="col"><strong>{{ Auth::user()->name }}</strong></td>
                </tr>
                <tr>
                    <th colspan="7" class="table-dark text-center">Daftar User</th>
                </tr>
            </thead>
            <tbody>
                @if($user->isEmpty())
                    <tr>
                        <td colspan="7" align="center">Tidak ada data yang ditampilkan</td>
                    </tr>
                @else
                <?php $count = 0; ?>
                @foreach($user AS $u)
                    <tr>
                        <td rowspan="5">{{ $loop->iteration }}</td>
                        <td colspan="6">User ID : {{ $u->id }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" rowspan="4" align="center" style="overflow: hidden;">
                            @if($u->profile_image == 'empty')
                                <span align="center">empty</span>
                            @else
                                <img src="{{ public_path('storage/'.$u->profile_image) }}" alt="{{ $u->profile_image }}" width="80">
                            @endif
                        </td>
                        <td>Nama</td><td>{{ $u->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $u->email }}</td>
                    </tr>
                    <tr>
                        <td>Bergabung pada</td>
                        <td>{{ $u->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Roles</td>
                        <td><strong>{{ $u->roles }}</strong></td>
                    </tr>
                <?php $count++; ?>
                @endforeach
                    <tr>
                        <td colspan="6" class="text-center">Total Pengguna</td>
                        <td class="text-center">{{ $count }}</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="table-dark text-center">Copyright 2020 - Ngodingers</td>
                    </tr>
                @endif
        </table>

    </main>
</body>

</html>
