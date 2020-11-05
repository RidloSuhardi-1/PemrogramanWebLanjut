<!-- child dari master about -->

@extends('masterKuis.masterContent')

@section('title', 'Tentang kami')

@section('main')
    <div class="starter-template" style="margin-top: 3rem;">
        <h1>Ngodingers News</h1>
        <p class="lead">
          Ngodingers News adalah sebuah situs yang menyediakan berbagai macam artikel seputar pemrograman di dunia.<br>
          Bagus buat kamu yang menyukai dunia programming dan sedang mencari referensi untuk pekerjaan kalian :)
        </p>
        <span class="lead">Dibuat dengan <a href="https://www.laravel.com/" target="_blank">Laravel</a></span>
    </div>
    
    <main role="main" class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Apa yang baru di Ngodingers ?</h6>

        @foreach($about As $Ab)
        <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="{{ '#'.$Ab->user_color }}"/><text x="50%" y="50%" fill="{{ '#'.$Ab->user_color }}" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">{{ '@'.$Ab->user }}</strong>
            {{ $Ab->update_info }}.
        </p>
        </div>
        @endforeach

        <small class="d-block text-right mt-3">
        <a href="#">All updates</a>
        </small>
    </div>

    </main>
@endsection