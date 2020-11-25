@extends('masterKuis.masterContent');

@section('title', 'Tambah Artikel')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Tambah Artikel</h3><br>
        <a href="{{ route('manageArticles') }}" class="btn btn-outline-info">< Kembali ke Kelola Artikel</a>
    </div>

    <form action="/article/create" method="post" enctype="multipart/form-data" class="clearfix">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"
            required="required" name="title" placeholder="Judul.."></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" required="required" name="content" placeholder="konten.." id="exampleFormControlTextarea1" row="5"></textarea>
        </div>
        <div class="form-group">
            <label for="image-upload">Upload Gambar</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)" required="required" name="image"></br>
                    <label class="custom-file-label" for="imgName" id="fileName">
                        Choose File
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="http://placehold.it/900x300" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>
        <div class="form-group">
            <label for="image">Penulis</label>
            <input type="text" class="form-control"
            required="required" name="writer" value="{{ Auth::user()->name }}" readonly></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>
</main>
@endsection