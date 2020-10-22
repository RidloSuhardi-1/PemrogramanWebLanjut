<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Beranda - Ngodingers News</title>

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
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Selamat Datang {{ Auth::user()->name }}</h4>
              <h4 class="text-white">Deskripsi singkat</h4>
              <p class="text-muted">
                Projek CMS dengan framework laravel untuk memenuhi tugas UTS, mata kuliah Pemrograman Web Lanjut<br><br>
                Nama : @yield('nama')<br>
                NIM : @yield('nim')<br>
                Kelas : MI @yield('kelas')
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Hai Ngodingers Disini...</h4>
              <ul class="list-unstyled">
                <li><a href="/dashboard" class="text-white">Home</a></li>
                <li><a href="{{ route('manage') }}" class="text-white">Kelola Artikel</a></li>
                <li><a href="/tentang" class="text-white">Apa itu Ngodingers ?</a></li><hr>
                <li><a href="/donasi" class="text-white">Donasi Ngodingers</a></li>
                <hr>
                <li><a href="#keluhan" class="text-white">Tanyakan keluhanmu ke CS Ngodingers</a></li><hr>
                <li>
                  <form action="/logout" method="POST">
                  <button type="submit" class="btn btn-danger">Log Out</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <strong>&nbsp;Ngodingers News</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Ngodingers News</h1>
      <p class="lead" >Baca berita terbaru seputar dunia pemrograman di dunia hanya di Ngodingers News</p>
      <p>
        <a href="#art-col" class="btn btn-primary my-2 btn-anima">Baca sekarang</a>
        &nbsp;
        <a href="/manage" class="btn btn-outline-light">Kelola Artikel</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light" id="art-col">
    <div class="container">

      <div class="row">
          
        <!-- card -->

        @foreach($artikels As $col)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" src="{{ $col->image }}" alt="">
            <div class="card-body">
            <h2 class="artic-ttl card-text">{{ substr($col->title, 0, 40) }}...</h2><hr>
              <p class="card-text">{{ substr($col->content, 0, 80) }}...</p>
              <div class="d-flex justify-content-between align-items-center">

                <div class="btn-group" style="width: 100%; height: 30px;">
                  <a href="#{{ $col->id }}" class="btn btn-sm btn-outline-secondary">Detail artikel</a>
                  <a class="btn btn-sm btn-outline-primary" href="/articles/{{ $col->id }}">Baca artikel</a>
                </div>
                
              </div><br>
              <small class="text-muted" style="display: inline-block; text-align: center; width: 100%;">Ngodingers</small>
            </div>
          </div>
          

          <!-- layout detail -->
          <div class="overlay" id="{{ $col->id }}">
              <div class="box-modal">
                  <span class="modal-ttl">Detail Artikel</span><hr>

                  <h2>{{ $col->title }}</h2>
                  <span>Dibuat pada : {{ $col->created_at }}</span>
                  <span>Penulis : <b>{{ $col->writer }}</b></span>

                  <a class="btn btn-lg btn-primary btn-modal" href="#art-col">Tutup</a>
              </div>
          </div>
        </div>
        @endforeach

        <!-- pagination -->

        <div class="wrapper">
          <div class="paginate">
              {{ $artikels->links() }}
          </div>
        </div>

        <!-- end card -->

      </div>
    </div>

    

  </div>

    <!-- carousel -->
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="bd-placeholder-img" src="{{ asset('img/imageSlide.png') }}" alt="Active Slide">
              <div class="container">
              <div class="carousel-caption text-left">
                  <h1>Berlangganan sekarang di Ngodingers News</h1>
                  <p>Dapatkan berita terbaru terkait bahasa pemrograman yang akan terus diperbarui di Ngodingers. Berlangganan sekarang dan dapatkan berita yang kamu sukai</p>
                  <p><a class="btn btn-lg btn-primary" href="#subscribe" role="button">Berlangganan sekarang</a></p>
              </div>
              </div>
          </div>

          @foreach($artikels As $artiSlide)
          <div class="carousel-item">
          <img class="bd-placeholder-img" src="{{ $artiSlide->image }}" alt="OK">
              <div class="container">
              <div class="carousel-caption">
                  <h1>{{ $artiSlide->title }}</h1>
                  <p>{{ substr($artiSlide->content, 0, 110) }}...</p>  
                  <p><a class="btn btn-lg btn-primary" href="{{ '/artikel/'.$artiSlide->id }}" role="button">Baca sekarang</a></p>
              </div>
              </div>
          </div>
          @endforeach

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- end carousel -->

    <!-- pesan -->

    <div class="starter-template" id="subscribe">
        <h1>Langganan Ngodingers Sekarang</h1>
        <p class="lead">Dengan berlangganan di Ngodingers,<br> kamu akan menerima berita terbaru setiap hari di kotak email kamu</p>
        
        <form>
          <div class="form-group col-md-6 sub-field">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan email kamu ya..">
          </div>
          <p><a class="btn btn-lg btn-primary" href="#" role="button" style="margin-top: 2rem;">Berlangganan sekarang</a></p>
        </form>

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
</html>
