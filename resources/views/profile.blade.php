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
        <div class="descr">
          <h1>Daniel de Sá</h1>
          <p>Apenas um cara q gosta de codigos e poesia</p>

          <div class="infos">
            <span class="info-local">
              <i class="fas fa-map-marker-alt" width="24px" height="24px" ></i> 
              São Paulo, Brasil</span>
            <span class="info-create">
              <i class="fas fa-birthday-cake"></i>
              Joined on 20 de março de 2020 </span>
            <!-- <span class=""></span> -->
          </div>
        </div>  
        <div class="status">
          <div>
            <strong>Status</strong>
            <p>Estudando</p>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="user-sidebar">
          <div class="widget">
            <header>
              <h4>Skills/Languages</h4>
            </header>
            <div class="widget-body">
              <p>Js, Nodejs, PHP</p>
            </div>
          </div>

          <div class="widget">
            <header>
              <h4>Learning/Trying</h4>
            </header>
            <div class="widget-body">
              <p>Go</p>
            </div>
          </div>

          <div class="widget">
            <header>
              <h4>Avaiable for</h4>
            </header>
            <div class="widget-body">
              <p>Projects</p>
            </div>
          </div>

        </div>

        <div class="posts-user">b</div>
        <div>c</div>
      </div>
    </main>

  </div>
</body>
</html>
