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
    <script src="{{ asset('js/script.js') }}"> </script>
</head>
<body>
    <div class="mainContainer">
        @include('components.header')

        <main class="mainFlex maxWidth">
            <div class="column1 box">
              <a class="like" onclick="handleLike({{ auth()->user()->id }}, {{ $post->id }} )">
                <i id="heart" class="far fa-heart core"></i>
                <span>1</span>
              </a>
            </div>
            <div class="column2 box">
              <img src="{{ asset('assets/download.jpeg') }}">
              <div class="description">
                <h1>Deno é uma merda</h1>

                <div>
                  <!-- adicionar a foto do criador do post aqui depois -->
                  <a href="#">Daniel de Sá</a>
                  <time datetime="2007-08-29T13:58Z">
                    August 29th, 2007 at 13:58
                  </time>
                </div>
              </div>

              <div class="content">
                asklsadjkldsadjklsa
              </div>
            
            </div>
            <div class="column3">
              <div class="creator-profile">
                <div class="black"></div>
                <a href="#">
                  <span class="img-profile">
                    <img src="{{ asset('assets/download.jpeg') }}">
                  </span>
                  <span class="name-creator">Daniel de Sá</span>
                </a>
              </div>
            </div>

        </main>
    </div>
</body>
</html>
