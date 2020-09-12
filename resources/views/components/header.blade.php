
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
          <div class="menu-profile">
            <a href="{{ URL::to('/profile/' . auth()->user()->username ) }}">
              <img src="{{ asset('assets/d.png') }}"></img>
            </a>
          </div>

        </div>
      </div>
    </header>
