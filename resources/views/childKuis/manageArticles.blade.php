@extends('masterKuis.masterContent');

@section('title', 'Kelola Artikel')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola Artikel</h1>
    </div>
    <a href="article/add" class="btn btn-primary">Tambah Data</a><br><br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article AS $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->title }}</td>
                <td>{{ $a->updated_at }}</td>
                <td><a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="article/delete/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Hapus artikel  `{{ $a->title }}`')">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection