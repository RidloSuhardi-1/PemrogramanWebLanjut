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


        <table border="1px" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Penulis</th>
                </tr>
            </thead>
            <tbody>
                @if($article->isEmpty())
                <td colspan="5" class="text-center">Tidak ada data yang ditampilkan</td>
                @else
                @foreach($article AS $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$a->title}}</td>
                    <td>{{ $a->image }}</td>
                    <td>{{$a->writer}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </main>
</body>

</html>
