@extends('masterKuis.masterContent');

@section('title', 'Kelola Artikel')

@section('main')
<style>
    button.btn-primary { border-radius: 0 5px 5px 0; }
    .form-control { border-radius: 5px 0 0 5px; }
</style>

<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola Artikel</h1>
    </div>
    <a href="article/add" class="btn btn-primary">Tambah Data</a>&nbsp;
    <a href="/article/cetak_pdf" class="btn btn-success float-right" target="_blank">CETAK PDF</a><br><br>

    <form class="form-inline" action="/searchArticle">
        <div class="form-group">
            @csrf
            <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-primary">search</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
            @foreach($article AS $a => $articles)
            <tr>
                <td class="text-center">{{ $a + $article->firstItem() }}</td>
                <td>{{ $articles->title }}</td>
                <td>
                    <img src="{{ asset('storage/'.$articles->image) }}" alt="{{ $articles->image }}" width="50" height="50">
                </td>
                <td>{{ $articles->updated_at }}</td>
                <td><a href="article/edit/{{ $articles->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="article/delete/{{ $articles->id }}" class="badge badge-danger" onclick="return confirm('Hapus artikel  `{{ $articles->title }}`')">Hapus</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

    <div class="wrapper">
          <div class="paginate">
              {{ $article->links() }}
          </div>
    </div>
</main>
@endsection
