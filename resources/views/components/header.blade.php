<link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">

<header class="">
  <div class="top-bar-container maxWidth">

    <div class="flexDiv">
      <div class="logo">
        <a href="{{ URL::to('/') }}">Kpop Home</a>
      </div>

      <div class="search-box">
        <form action="#" method="get">
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
      <div class="menu-profile dropdown">
        <a class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('storage/' . $user->path_profile_image ) }}"></img>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{ URL::to('/profile/' . auth()->user()->username ) }}">Profile</a>
          <a class="dropdown-item logout" href="{{ URL::route('logout') }}">Logout</a>
        </div>
      </div>

    </div>
    </div>
</header>


