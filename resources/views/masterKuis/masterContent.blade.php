<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>@yield('title') - Ngodingers News</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

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
  <!-- navigation/header -->
  <!-- end navigation -->
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
                        <img src="@if(Auth::user()->profile_image == 'empty') {{ asset('storage/images/default.png') }} @else {{ asset('storage/'.Auth::user()->profile_image) }} @endif" class="rounded" width=20 height=20 alt="{{ Auth::user()->profile_image }}">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/users/editUser/{{ Auth::user()->id }}">
                        {{ __('Ubah Profil') }}
                    </a>
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

    <!-- main -->
      @yield('main')
    <!-- end main -->

    <!-- footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Ahmad Ridlo Suhardi | 1931710137</p>
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/master-js/tambahan/functionComment.js') }}"></script>
    <script src="{{ asset('js/master-js/tambahan/functionReadUrl.js') }}"></script>
    <script src="{{ asset('js/master-js/tambahan/filenameDisplay.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("vendor/jquery.slim.min.js") }}"><\/script>')</script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/master-js/tambahan/offcanvas.js') }}"></script>

</body>
</html>
