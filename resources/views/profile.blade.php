<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casa das Kpopers</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <script src="https://kit.fontawesome.com/60e76d6bf1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/script.js') }}"> </script>
</head>
<body>
  <div class="mainContainer">
    <header class="">
      <div class="top-bar-container maxWidth">

        <div class="flexDiv">
          <div class="logo">
            Casa das Kpopers
          </div>

          <div class="search-box">
            <form class="" action="#" method="get">
              <input type="text" name="" value="" placeholder="Pesquisar">
            </form>
          </div>
        </div>

        <div class="top-right">
          <a href="{{ URL::route('new') }}" class="btn btn-primary write-post">
            Write a post
          </a>
          <a class="iconButton" href="#">
            <i class="far fa-bell"></i>
          </a>
          <div class="menu-profile">
            <a href="{{ URL::to('/profile/' . auth()->user()->username ) }}">
              <img src="{{ asset('assets/d.png') }}"></img>
            </a>
          </div>

        </div>
      </div>
    </header>

    <main>
      <div class="marrom"></div>
      <div class="profile">
        <a href="{{ URL::route('settings') }}" class="btn btn-primary write-post">
          Settings
        </a>
        <div class="descr">
          <h1>{{ $user->name }}</h1>
          <p>{{ $user->bio }}</p>

          <div class="infos">
            <span class="info-local">
              <i class="fas fa-map-marker-alt"></i>
              {{ $user->estado  }}, {{ $user->pais }}</span>
            <span class="info-create">
              <i class="fas fa-birthday-cake"></i>
              Entrou em {{ $user->created_at  }} </span>

            @php
            $semtt = false;

            if($user->twitter_user === null) {
                $semtt = true;
            } else {
              $semtt = false;
              $usertt = "https://twitter.com/@" . $user->twitter_user;

            }
            @endphp

            @if($semtt)

            @else
              <a href="{{ $usertt  }}" class="icon-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            @endif
          </div>
        </div>

        @php
        $sem_status = false;

        if($user->status === null) {
          $sem_status = true;
        } else {
          $sem_status = false;
        }
        @endphp
        @if($sem_status)
          <div class="status" style="border:0;">
            <div>
            </div>
          </div>
      </div>
        @else
          <div class="status">
            <div>
              <strong>Status</strong>
              <p>{{ $user->status }}</p>
            </div>
          </div>
      </div>
        @endif


      <div class="sidebar">
        <div class="user-sidebar">
          <div class="widget">
            <header>
              <h4>Fandom</h4>
            </header>
            <div class="widget-body">
              <p>{{ $user->fandom }}</p>
            </div>
          </div>

          <div class="widget">
            <header>
              <h4>Stan</h4>
            </header>
            <div class="widget-body">
              <p>{{ $user->stan }}</p>
            </div>
          </div>

          <div class="widget">
            <header>
              <h4>Ultimate</h4>
            </header>
            <div class="widget-body">
              <p>{{ $user->ultimate  }}</p>
            </div>
          </div>

          <div class="widget">
            <header>
              <h4>Bias</h4>
            </header>
            <div class="widget-body">
              <p>{{ $user->bias }} </p>
            </div>
          </div>

          <div class="sidebar-data">
            <div> {{  sizeof($posts) }} Posts Published</div>
            <div>0 Comments Written</div>
            <!-- <div>35 Tags Followed</div> -->
          </div>

        </div>

        <div class="posts-user">
          <div class="posts">
            @foreach ($posts as $post)
            @php
            $deulike = false;
            @endphp

            <div class="post">
              @if($post->path_cover_image === null)

              @else
                <img src="{{ asset('storage/' . $post->path_cover_image) }}">
              @endif

              <div class="details-post">
                <div class="autor-post">
                  <a href="#" class="name">Daniel de Sá</a> <br> <a href="#" class="date">{{ $post->created_at }}</a>
                </div>

                <div class="title-post">
                  <h2>
                    <a href="#">
                      {{ $post->title }}
                    </a>
                  </h2>
                  <div class="hashtag">
                    <a href="#">{{ $post->tag }}</a>
                  </div>

                  <div class="reactions">
                    <div class="react">
                      <a class="like" onclick="handleLike({{ auth()->user()->id }}, {{ $post->id }} )">
                        @php
                        foreach($likes as $like) {
                        if($like->id_post == $post->id) {
                        $deulike = true;
                        }
                        }

                        @endphp

                        @if($deulike == true)
                        <i id="heart{{ $post->id }}" class="fas fa-heart"></i> <span id="like{{ $post->id }}">{{ $post->num_likes }}</span> likes
                        @else
                        <i id="heart{{ $post->id }}" class="far fa-heart"></i> <span id="like{{ $post->id }}">{{ $post->num_likes }}</span> likes
                        @endif
                      </a>

                      <a class="comment">
                        <i class="far fa-comment"></i> {{ $post->num_comments }} comments
                      </a>
                    </div>
                    <div class="react2">
                      <!-- <small>{{$post->time_read}} min read</small> -->
                      <button type="button" class="btn btn-light">Save</button>
                    </div>

                  </div>
                </div>
              </div>

            </div>
            @endforeach
          </div>
        </div>
        <div>c</div>
      </div>
    </main>

  </div>
</body>
</html>
