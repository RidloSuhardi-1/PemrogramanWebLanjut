<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Tentang kita - Ngodingers News</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/master-css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/master-css/main-css/bs/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master-css/main-css/tambahan/masterHome.css') }}" rel="stylesheet">

  </head>
  <body>
    <header>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
            <a href="/dashboard" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                <strong>&nbsp;Ngodingers News</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manage') }}">Kelola</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/tentang">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/donasi">Donasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <!-- pesan -->

    <div class="starter-template" style="margin-top: 3rem;">
        <h1>Ngodingers News</h1>
        <p class="lead">
          Ngodingers News adalah sebuah situs yang menyediakan berbagai macam artikel seputar pemrograman di dunia.<br>
          Bagus buat kamu yang menyukai dunia programming dan sedang mencari referensi untuk pekerjaan kalian :)
        </p>
        <span class="lead">Dibuat dengan <a href="https://www.laravel.com/" target="_blank">Laravel</a></span>
    </div>

    <!-- lain -->
    
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

<!-- footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">@yield('nama') | @yield('nim')</p>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="{{ asset("vendor/jquery.slim.min.js") }}"><\/script>')</script><script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/master-js/tambahan/offcanvas.js') }}"></script></body>
</html>
