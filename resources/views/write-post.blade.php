<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casa das Kpopers</title>
    <link rel="stylesheet" href="{{ asset('css/write-post.css') }}">
    <script src="https://kit.fontawesome.com/60e76d6bf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"> </script>
  </head>
  <body>
    <header class="">
      <div class="top-bar-container maxWidth divF">

        <div class="flexDiv">
          <div class="text-top">
            <span>Write a new post</span>
          </div>

          <div class="edit-preview">
            <button type="button" class="btn btn-light">Edit</button>
            <button type="button" class="btn btn-light">Preview</button>
          </div>
        </div>
      </div>

      <div class="close">
        <a href="{{ URL::route('home') }}">
          <i class="fas fa-times" width="24" height="24"></i>
        </a>
      </div>
    </header>
    <main class="post">
      <div class="write">
        <div class="text-padding">
          <button type="button" class="cover-imagebtn">Add a cover image</button>
          <div class="title">
            <!-- <textarea type="text" placeholder="New post title here..." ></textarea> -->
            <input placeholder="New post title here...">
          </div>

          <div class="tags">
            <input placeholder="Add up to 4 tags...">
          </div>
        </div>

        <div class="text-padding">
          <div class="upload-image">
            <button class="btn">
              <i class="fas fa-image"></i>
              Upload image
            </button>
          </div>
          <textarea class="write-content" placeholder="Write your post content here..."></textarea>
        </div>
      </div>

      <div class="trick">
        Use markdown pow, fica daora
      </div>

      <div class="footer">
        <button class="btn btn-primary publish-btn">Publish</button>
        <button class="btn btn-light save-draft">Save draft</button>
        <button class="btn btn-light revert-btn">Revert new changes</button>


      </div>
    </main>

  </body>
</html>
