

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casa das Kpopers</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
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
   
    @php
      $username = '@' . auth()->user()->username;
    @endphp

    <main>
      <header><h1>Settings for <a href="{{ URL::to('/profile/' . auth()->user()->username)  }}" >{{ $username }}</a></h1></header>

      <div>
        <div class="sidebar-left">
          <nav>
            <a href="#" active >Profile</a>
            <a href="#">UX</a>
            <a href="#">Integrations</a>
            <a href="#">Notifications</a>
            <a href="#">Organization</a>
            <a href="#">Billing</a>
            <a href="#">Account</a>
            <a href="#">Misc</a>
          </nav>
        </div>
      
        <div class="content">
          <form action="{{ URL::route('settings.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
              <label for="email">Email</label>
              <input type="email" placeholder="youremail@gmail.com" value="{{ $user->email }}" name="email">
            </div>

            <div class="field">
              <label for="username">Username</label>
              <input type="text" placeholder="danitw" value="{{ $user->username }}" name="username">
            </div>

            <div class="field">
              <label for="name">Name</label>
              <input type="text" placeholder="Daniel" value="{{ $user->name }}" name="name">
            </div>

            <div class="field-photo">
              <label for="photo">Profile Image</label>
              <div>
                <span><img src="{{ asset('assets/d.png') }}"></span>
                <input class="photo" name="photo"  accept="image/*" type="file">
              </div>
            </div>

            <!-- <div class="field">
              <label for="fandom">Fandom</label>
              <input type="text" placeholder="" name="fandom">
            </div> -->

            <div class="field">
              <label for="bio">Bio</label>
              <textarea maxlength="200" rows="3" type="text" name="bio">{{ $user->bio }}</textarea>
            </div>

            <div class="field">
              <label for="status">Status</label>
              <input type="text" placeholder="No que você esta pensando agora?" value="{{ $user->status }}" name="status">
            </div>

            <div class="field">
              <label for="pais">Pais</label>
              <input type="text" placeholder="Brasil" value="{{ $user->pais }}" name="pais">
            </div>

            <div class="field">
              <label for="estado">Estado</label>
              <input type="text" placeholder="São Paulo" value="{{ $user->estado }}" name="estado">
            </div>
            
            <div class="field">
              <label for="twitter_user">Twitter User</label>
              <input type="text" placeholder="@youruser" value="{{ $user->twitter_user }}" name="twitter_user">
            </div>

            <div class="field">
              <label for="fandom">Fandom</label>
              <input type="text" placeholder="army" value="{{ $user->fandom }}" name="fandom">
            </div>
           
             <div class="field">
              <label for="stan">Stan</label>
              <input type="text" placeholder="" value="{{ $user->stan }}" name="stan">
            </div>

            <div class="field">
              <label for="ultimate">Ultimate</label>
              <input type="text" placeholder="jennie" value="{{ $user->ultimate }}" name="ultimate">
            </div>

            <div class="field">
              <label for="bias">Bias</label>
              <input type="text" placeholder="" value="{{ $user->ultimate }}" name="bias">
            </div>
           

            <!-- <div class="field">
              <label for="getting">I'm getting into</label>
              <textarea maxlength="200" rows="3" type="text" name="getting">Go</textarea>
            </div>

            <div class="field">
              <label for="my-projects">My Projects</label>
              <textarea maxlength="200" rows="3" type="text" name="my-projects">
              </textarea>
            </div>

            <div class="field">
              <label for="avaliable">Available for</label>
              <textarea maxlength="200" rows="3" type="text" name="avaliable">New projects and open source
              </textarea>
            </div> -->
            
            <button type="submit" class="btn btn-primary write-post">
              Save
            </button>

          </form>
        </div>
      </div>
    </main>

  </div>
</body>
</html>
