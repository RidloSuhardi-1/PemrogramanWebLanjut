<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table tr td,
        table tr th {
            font-size: 9pt;
            padding: 5px 8px;
            margin: auto;
        }

    </style>
    <main role="main" class="container"><br><br>

        <h1 style="text-align: center;">Daftar Artikel</h1>
        <small>Dicetak oleh : {{ Auth::user()->name }}</small>

        <hr>

        <table border="1px" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Penulis</th>
                </tr>
            </thead>
            <tbody>
                @if($article->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data yang ditampilkan</td>
                </tr>
                @else
                <?php $count = 0; ?>
                @foreach($article AS $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{$a->title}}</td>
                    <td>
                        <img src="{{ public_path('storage/'.$a->image) }}" alt="$a->image" width="50" height="50">
                    </td>
                    <td>{{$a->writer}}</td>
                </tr>
                <?php $count++; ?>
                @endforeach
                <tr>
                    <th colspan="3">Total</th>
                    <td>{{ $count }}</td>
                </tr>
                @endif
            </tbody>
        </table>

    </main>
</body>

</html>
