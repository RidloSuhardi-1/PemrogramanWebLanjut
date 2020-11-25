@extends('masterKuis.masterContent');

@section('title', 'Edit Artikel')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Edit Artikel</h3><br>
        <a href="{{ route('manageArticles') }}" class="btn btn-outline-info">< Kembali ke Kelola Artikel</a>
    </div>

    <form action="/article/update/{{ $article->id }}" method="post" enctype="multipart/form-data" class="clearfix">
        @csrf
        <input type="hidden" name="id" value="{{ $article->id }}"><br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"
            required="required" name="title" value="{{ $article->title }}" placeholder="Judul.."></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" required="required" name="content" placeholder="konten.." id="exampleFormControlTextarea1" row="5">{{ $article->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image-upload">Upload Gambar</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)" name="image"></br>
                    <label class="custom-file-label" for="image-upload" id="fileName">
                        {{ $article->image }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="{{ asset('storage/'.$article->image) }}" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>
        <div class="form-group">
            <label for="image">Diposting oleh</label>
            <input type="text" class="form-control"
            required="required" name="writer" value="{{ $article->writer }}" readonly></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Update Data</button>
    </form>
</main>
@endsection