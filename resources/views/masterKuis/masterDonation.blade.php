<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Donasi Ngodingers - Ngodingers News</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

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
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">About</a>
                </li>
                <li class="nav-item active">
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

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="margin-top: 40px;">
        <h1 class="display-4" style="margin-bottom: 30px;">Yuk Bantu Ngodingers Berkembang</h1>
        <p class="lead">Bantuan dari kamu akan sangat berguna untuk perkembangan situs ini<br>Yuk donasi, sesuaikan budget kamu ya..</p>
    </div>

    <div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Standart</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$5</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>Donasi sebesar <b>5</b> dollar</li>
            <li>Tidak punya budget banyak ?</li>
            <li>Pilih Ini Aja</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Donasi</button>
        </div>
        </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Sultan</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$999</h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>Donasi sebesar <b>999</b> dollar</li>
            <li>Kebanyakan Uang ?</li>
            <li>Donasikan Aja Disini</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Donasi</button>
        </div>
        </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Custom</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$??</h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>Pengen nentuin jumlahnya ?</li>
            <li>Bisa kok, Isi aja disini</li>
            </ul>
            <form>
                <div class="input-group mb-2" style="margin-bottom: 10px;">
                    <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="0000,00">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Donasi</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>


    </div>

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
      <script src="{{ asset('js/master-js/tambahan/offcanvas.js') }}"></script>
</body>
</html>
