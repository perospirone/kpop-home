<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casa das Kpopers</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/60e76d6bf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
                <a href="#" class="btn btn-primary write-post">
                  Write a post
                </a>
                <a class="iconButton" href="#">
                  <i class="far fa-bell"></i>
                </a>
                <a class="iconButton" href="#">
                  <i class="fas fa-bars"></i>
                </a>
            </div>
            
        </div>
    </header>

    <main class="mainFlex maxWidth">
        <div class="column1 box">
            <div class="vertical-menu">
              <a href="#" class="active">Home</a>
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
              <a href="#">Link 4</a>
            </div>

            <div class="vertical-menu2">
              <header class="separador">DESIGN YOUR EXPERIENCE</header>

              <a href="#">#home</a>
              <a href="#">#link 1</a>
              <a href="#">#link 2</a>
              <a href="#">#link 3</a>
              <a href="#">#link 4</a>


            </div>
        </div>
        <div class="column2 box">
          <header>
            <h2>Posts</h2>

            <nav>
              <a href="#" class="feed">Feed</a>
              <a href="#">Week</a>
              <a href="#">Month</a>
              <a href="#">Year</a>
              <a href="#">Infinity</a>
              <a href="#">Latest</a>
            </nav>
          </header>

          <div class="posts">
            <div class="post">
              <img src="{{ asset('assets/deno.png') }}">
              <div class="details-post">
                <div class="autor-post">
                  <a href="#" class="name">Daniel de Sá</a> <br> <a href="#" class="date">Aug 3</a>
                </div>

                <div class="title-post">
                  <h2>
                    <a href="#">
                      Deno é uma bosta e eu posso provar
                    </a>
                  </h2>
                  <div class="hashtag">
                    <a href="#">#metendoOpau</a>
                  </div>

                  <div class="reactions">
                    <div class="react">
                      <a href="#" class="like">
                        <i class="far fa-heart"></i> 10 reactions
                      </a>  
                      
                      <a href="#" class="comment">
                        <i class="far fa-comment"></i> 10 comments
                      </a>

                    </div>
                    <div class="react2">
                      <small>4 min read</small>
                      <button type="button" class="btn btn-light">Save</button>
                    </div>

                  </div>
                </div>

              </div>
            </div>  



          </div>

        </div>
        <div class="column3 box">
            "At vero eos et accusamus et iusto odioblad dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."
        </div>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>
