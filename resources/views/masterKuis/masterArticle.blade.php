<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ substr($article->title, 0, 50) }}.. - Ngodingers News</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/master-css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

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
          <li class="nav-item active">
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

  <!-- Page Content -->
  <div class="container" style="padding-top: 3rem">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $article->writer }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ $article->image }}" alt="">

        <hr>

        <!-- Post Content -->
        <h2>Konten berita</h2>
        <p class="lead"></p>
        <hr>
        <p>{{ $article->content }}</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4" id="C">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="/article/addComm/{{ $article->id }}" method="post">
            @csrf
              <div class="form-group">
                <input type="hidden" name="artikels_id" value="{{ $article->id }}">
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="comment_id" value="{{ Auth::user()->id }}">
                <textarea name="content" class="form-control" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        @foreach($comment AS $k)
        <!-- Single Comment -->
        <div class="media mb-4">
        
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{ $k->name }}</h5>
            <p>{{ $k->content }}</p>
            <input type="button" class="btn btn-primary btn-sm" onclick="showHide('replycomment-{{ $k->id }}')" value="Reply">
            <!-- <button class="btn btn-primary btn-sm" onclick="funComment()" id="btn-value">Reply</button> -->

            <!-- jika komentar adalah milik user -->
            @if( $k->name == Auth::user()->name)
            &nbsp;
            <div class="btn-group btn-group-toggle" style="width: auto;" data-toggle="buttons">
                <a href="/article/delComm/{{ $k->id }}/{{ $article->id }}" class="btn btn-danger btn-sm" onclick="return confirm('hapus komentar ?')">delete</a>
            </div>
            @endif
        
            <!-- reply textarea -->
            <form id="replycomment-{{ $k->id }}" style="display: none;">
              <hr>
              <div class="form-group">  
                <label for="exampleFormControlTextarea1">Reply to <a href="#" class="text-decoration-none">&commat;{{ $k->name }}</a></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">&commat;{{ $k->name }} </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Reply &commat;{{ $k->name }}</button>
            </form>
            
          </div>
        </div>
        @endforeach
        <hr>
        
        <!-- Comment with nested comments -->
        <!-- <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Sagiri Izumi</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

          </div>
        </div> -->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        
        <div class="card my-4">
          <h5 class="card-header">Bagikan artikel ini</h5>
          <div class="card-body">
            <ul>
              <li><a href="#sharetowhatsapp">Whatsapp</a></li>
              <li><a href="#sharetofacebook">Facebook</a></li>
              <li><a href="#sharetoinstagram">Instagram</a></li>
              <li><a href="#sharetotwitter">Twitter</a></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
    <p class="m-0 text-center text-white">@yield('nama') | @yield('nim')</p>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Custom JavaScript -->
  <script src="{{ asset('js/master-js/tambahan/functionComment.js') }}"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
