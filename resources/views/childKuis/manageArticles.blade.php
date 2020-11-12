@extends('masterKuis.masterContent');

@section('title', 'Kelola Artikel')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola Artikel</h1>
    </div>
    <a href="article/add" class="btn btn-primary">Tambah Data</a>&nbsp;
    <a href="/article/cetak_pdf" class="btn btn-success float-right" target="_blank">CETAK PDF</a><br><br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($article->isEmpty())
            <td colspan="5" class="text-center">Tidak ada data yang ditampilkan</td>
            @else
            @foreach($article AS $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->title }}</td>
                <td>
                    <img src="{{ asset('storage/'.$a->image) }}" alt="{{ $a->image }}" width="50" height="50">
                </td>
                <td>{{ $a->updated_at }}</td>
                <td><a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="article/delete/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Hapus artikel  `{{ $a->title }}`')">Hapus</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</main>
@endsection