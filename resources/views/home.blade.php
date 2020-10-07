<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kpop Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
    @include('components.header')

    <main class="mainFlex maxWidth">
      <div class="column1 box">

        <a class="sidebar-profile">
          @if($user->path_profile_image === null)

          @else
            <img src="{{ asset('storage/' . $user->path_profile_image ) }}" width="48" height="48">
          @endif

          @php
            $username = "@" . auth()->user()->username;
          @endphp

          <div>
            <h4>{{ auth()->user()->name }}</h4>
            <small>{{ $username }}</small>
          </div>
        </a>


        <!--- <div class="vertical-menu">
          <a href="#" class="active">Home</a>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
          <a href="#">Link 4</a>
        </div>

        <div class="vertical-menu2">
          <header class="separador">DESIGN YOUR EXPERIENCE</header>

          <navbar>
            <a href="#">#home</a>
            <a href="#">#link 1</a>
            <a href="#">#link 2</a>
            <a href="#">#link 3</a>
            <a href="#">#link 4</a>
            <a href="#">#link 5</a>
            <a href="#">#link 6</a>
            <a href="#">#link 3</a>
            <a href="#">#link 4</a>
            <a href="#">#link 1</a>
            <a href="#">#link 2</a>
            <a href="#">#link 3</a>
            <a href="#">#link 4</a>
            <a href="#">#link 1</a>
            <a href="#">#link 2</a>
            <a href="#">#link 3</a>
            <a href="#">#link 4</a>
            <a href="#">#link 1</a>
            <a href="#">#link 2</a>
            <a href="#">#link 3</a>
            <a href="#">#link 4</a>
          </navbar>
        </div>

         <div class="anuncio">
          <h1>ANUNCIE AQUI DANIEL</h1>
        </div> -->

          </div>

          <div class="column2 box">
            <header>
              <h2>Posts</h2>

              <!-- <nav>
                <a href="#" class="feed">Feed</a>
                <a href="#">Week</a>
                <a href="#">Month</a>
                <a href="#">Year</a>
                <a href="#">Infinity</a>
                <a href="#">Latest</a>
                </nav> -->
            </header>
            <div class="posts">

              @foreach ($posts as $post)
              @php
              $deulike = false;

              $data = date("d/m/Y H:i:s", strtotime($post->created_at));
              @endphp

              <div class="post">
                @if($post->path_cover_image === null)

                @else
                  <img src="{{ asset('storage/' . $post->path_cover_image) }}">
                @endif

                <div class="details-post">
                  <div class="autor-post">
                    <a href="{{ URL::route('profile', $post->username_author) }}" class="name">{{ $post->name_author }}</a> <br> <a href="#" class="date">{{ $data }}</a>
                  </div>

                  <div class="title-post">
                    <h2>
                      <a href="{{ URL::route('post', $post->id)}}">
                        {{ $post->title }}
                      </a>
                    </h2>
                    <!-- <div class="hashtag">
                      <a href="#">{{ $post->tag }}</a>
                    </div> -->

                    <div class="reactions">
                      <div class="react">
                        <a class="like" onclick="handleLike({{ auth()->user()->id }}, {{ $post->id }})">
                          @php
                            foreach($likes as $like) {
                              if($like->id_post == $post->id) {
                                $deulike = true;
                              }
                            }
                          @endphp

                          @if($deulike === true)
                            <i id="heart{{ $post->id }}" class="fas fa-heart"></i> <span id="like{{ $post->id }}">{{ $post->num_likes }}</span> likes
                          @else
                            <i id="heart{{ $post->id }}" class="far fa-heart"></i> <span id="like{{ $post->id }}">{{ $post->num_likes }}</span> likes
                          @endif
                        </a>

                        <!-- <a class="comment">
                          <i class="far fa-comment"></i> {{ $post->num_comments }} comments
                        </a> -->

                      </div>
                      <div class="react2">
                        <!-- <small> {{ $post->time_read }} min read</small> -->
                        <!-- <button type="button" class="btn btn-light">Save</button> -->
                      </div>

                    </div>
                  </div>
                </div>

              </div>
              @endforeach




            </div>

          </div>
          <div class="column3 box">
            <!-- <section class="listings">
              <header>
                <h3>Listagens</h3>
                <div>
                  <a href="#">Mostrar todos</a>
                </div>
              </header>

              <div>
                <a href="#">lprejk asndkjskjasnkjsakjdsankj nsakjaskjsa</a>
                <a href="#">alroe jkdsakjdsadsakjadsmdsadas</a>
                <a href="#">asldsjalkds çajklçsa jksa daçls klçsa</a>
                <a href="#">aklsdjklsadjklasldsa</a>
                <a href="#" class="create-listing">Criar uma listagem</a>
              </div>


            </section>
            <section class="news">
              <header>
                <h3>Noticias</h3>
              <div>
                <a href="#">Mostrar todos</a>
              </div>
            </header>

            <div>
              <a href="#">lprejk asndkjskjasnkjsakjdsankj nsakjaskjsa
                <div class="comments">Comments: </div>
              </a>
              <a href="#">lprejk asndkjskjasnkjsakjdsankj nsakjaskjsa
                <div class="comments">Comments: </div>
              </a>
              <a href="#">alroe jkdsakjdsadsakjadsmdsadas</a>
              <a href="#">asldsjalkds çajklçsa jksa daçls klçsa</a>
              <a href="#">aklsdjklsadjklasldsa</a>
            </div>


            </section> -->


        </div>
      </main>
    </div>
  </body>
  </html>
