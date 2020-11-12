<!-- child dari master article -->

@extends('masterKuis.masterContent')

@section('title', $article->title)

@section('main')
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
        <img class="img-fluid rounded" src="{{ asset('storage/'.$article->image) }}" alt="">

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
@endsection