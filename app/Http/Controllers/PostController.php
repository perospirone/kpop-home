<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\User;

  class PostController extends Controller {

    public $objPosts;

    public function __construct() {
      $this->objPost = new Post;
      $this->middleware('auth');
    } 

    public function create(Request $req) {
      $title = $req->title;
      $tag = $req->tags;
      $content = $req->content;

      $path_cover_image;
      $path_image;

      // Depois tem que colocar uma mensagem de erro pro usuario aqui
      if($req->file('cover-image')->isValid()) {
        $path_cover_image = $req->file('cover-image')->store('public/images');
      }

      if($req->file('image')->isValid()) {
        $path_image = $req->file('image')->store('public/images');
      }

      $id = auth()->user()->id;

      $this->objPost->create(['title' => $title, 'tag' => $tag, 'content' => $content, 'path_cover_image' => $path_cover_image, 'path_image' => $path_image, 'creator_id' => $id, 'num_likes' => 0, 'num_comments' => 0]);

      return redirect('/home');

    }

    // Metodo pra mostrar todos os posts na pagina inicial
    public function index() {
      $objPosts = new Post;

      //$objUser = new User;
      //dd($objUser);
      $allPosts = $objPosts->all();

    /*foreach ($allPosts as $value) {
      // echo $value . PHP_EOL;

      echo $value;
    }*/

      //echo $allPosts[0]->id;


      return view('home', ['posts' => $allPosts]);
    }

    public function addLikes($id, Request $req) {
      $posts = Post::all();

      $post = $posts->find($id);

      // $idUser = $req->idUser;
      $idUser = auth()->user()->id;
      // $user = User::where('id', $idUser);

      $objLikes = Like::where(['id_user' => $idUser, 'id_post' => $id])->first();

      if($objLikes === null) {
        $objLike = new Like;

        $objLike->id_user = auth()->user()->id;
        $objLike->id_post = $id;

        $objLike->save();

        $likes = $post->num_likes;

        $post->num_likes =  $likes + 1;

        $post->save();

      } else {
        return $d;
      }

      

      //return $post->num_likes;



    }
  }
