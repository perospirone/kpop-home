<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kpop Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <script src="https://kit.fontawesome.com/60e76d6bf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/post.js') }}"></script>
</head>
<body>
  <div class="mainContainer">
    @include('components.header')

        <main class="mainFlex maxWidth">
            <div class="column1 box">
              @if($like == true)
                <a class="like" onclick="handleLike({{ auth()->user()->id }}, {{ $post->id }} )">
                  <i id="heart" class="fas fa-heart core"></i>
                  <span>{{ $post->num_likes }}</span>
                </a>
              @else
                <a id="like" class="like" onclick="handleLike({{ auth()->user()->id }}, {{ $post->id }} )">
                  <i id="heart" class="far fa-heart core"></i>
                  <span id="likes">{{ $post->num_likes }}</span>
                </a>
              @endif
            </div>
            <div class="column2 box">
              @if($post->path_cover_image === null)
              @else
                <img src="{{ asset('storage/' . $post->path_cover_image) }}">
              @endif

              <div class="description">
                <h1>{{ $post->title }}</h1>

                <div>
                  <!-- adicionar a foto do criador do post aqui depois -->
                  <a href="#">{{ $user->name }}</a>
                  <time>
                    {{ $post->data }}
                  </time>
                </div>
              </div>

              <div class="content">
                {{ $post->content }}
              </div>
            
             <!-- <div class="comments">
                <div class="user-comment">
                  <form action="#" method="post">
                    <header>
                      <h3>Comentarios</h3>
                      <button type="button" class="btn btn-light">Acompanhe a treta</button>
                    </header>
                    <textarea name="comment">Escreva seu comentario aqui</textarea>
                    <div class="f">
                      <a type="submit" class="btn btn-primary">SUBMIT</a>
                    </div>
                  </form>
                </div>

                <div class="comentarios">
                  <div>
                    <header>
                      <a>Daniel</a>
                      <p>13 Sept</p>
                    </header>
                    <div class="body-comment">
                      <p>
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                        saddmajkdsahjkdsahjkdsasad
                      </p>
                    </div>

                    <footer>
                      <a class="corac">coracao <span>13</span></a>
                      <a>REPLY</a>
                    </footer>

                  </div>


                </div>

             </div>-->


            </div>
            <div class="column3">
              <div class="creator-profile">
                <div class="black"></div>
                <a href="{{ URL::route('profile', ['username' => $user->username])}}">
                  <span class="img-profile">
                    <img src="{{ asset('storage/'. $user->path_profile_image) }}">
                  </span>
                  <span class="name-creator">{{ $user->name }}</span>
                </a>

                <div class="biography">
                  {{ $user->bio }}
                </div>
               
                <!-- <div class="follow">
                  <button class="btn btn-primary write-post">
                    Follow
                  </button>
                </div> -->

                <div class="user-details">
                  <ul>
                    
                    @if($user->status === null)
                    @else
                      <li>
                        <div class="key">Status</div>
                        <div class="value">{{ $user->status }}</div>
                      </li>
                    @endif

                    <li>
                      <div class="key">Localização</div>
                      <div class="value">{{ $user->estado }}, {{ $user->pais }}</div>
                    </li>

                    <li>
                      <div class="key">Entrou no dia</div>
                      <div class="value last">{{ $user->joined }}</div>
                    </li>

                  </ul>
                </div>
              
              </div>
            </div>

        </main>
    </div>
</body>
</html>
