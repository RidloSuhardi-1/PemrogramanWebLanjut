<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Tambah data - Ngodingers News</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/master-css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <a href="@if (Auth::user()->roles === 'Administrator') # @else /dashboard @endif" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                <strong>&nbsp;Ngodingers News</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    @can('user-display')
                    <a class="nav-link" href="/dashboard">Home
                    <span class="sr-only">(current)</span>
                    </a>
                    @endcan
                </li>
                <li class="nav-item {{ Route::is('manageUsers') ? 'active' : '' }}">
                    @can('manage-articles')
                    <a class="nav-link" href="{{ route('manageUsers') }}">Kelola User</a>
                    @endcan
                </li>
                <li class="nav-item {{ Route::is('manageArticles') ? 'active' : '' }}">
                    @can('manage-articles')
                    <a class="nav-link" href="{{ route('manageArticles') }}">Kelola Artikel</a>
                    @endcan
                </li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                    @can('user-display')
                    <a class="nav-link" href="/tentang">About</a>
                    @endcan
                </li>
                <li class="nav-item {{ Route::is('donasi') ? 'active' : '' }}">
                    @can('user-display')
                    <a class="nav-link" href="/donasi">Donasi</a>
                    @endcan
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
    
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Tambah User</h3><br>
        <a href="{{ route('manageArticles') }}" class="btn btn-outline-info">< Kembali ke Kelola User</a>
    </div>

    <form action="/users/createUser" method="POST" class="clearfix">
        @csrf
        <div class="form-group">
            <label for="title">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">{{ __('Tambah User') }}</button>
    </form>
</main>

<!-- footer -->
<footer class="py-5 bg-dark" style="margin-top: 50px;">
    <div class="container">
        <p class="m-0 text-center text-white">Ahmad Ridlo Suhardi | 1931710137</p>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/master-js/tambahan/functionReadUrl.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="{{ asset("vendor/jquery.slim.min.js") }}"><\/script>')</script><script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/master-js/tambahan/offcanvas.js') }}"></script></body>
</html>
