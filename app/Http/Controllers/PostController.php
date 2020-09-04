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

      if($req->file('cover-image') === null) {
        $path_cover_image = null;
      } elseif($req->file('cover-image')->isValid()) {
        $path_cover_image = $req->file('cover-image')->store('public/images');
      }

      if($req->file('image') === null) {
        $path_image = null;
      } elseif($req->file('image')->isValid()) {
        $path_image = $req->file('image')->store('public/images');
      }

      $id = auth()->user()->id;

      $this->objPost->create(['title' => $title, 'tag' => $tag, 'content' => $content, 'path_cover_image' => $path_cover_image, 'path_image' => $path_image, 'creator_id' => $id, 'num_likes' => 0, 'num_comments' => 0]);

      return redirect('/home');

    }

    // Metodo pra mostrar todos os posts na pagina inicial
    public function index() {
      $allPosts = Post::all();

      $user = auth()->user()->id;

      $allLikes = Like::where(['id_user' => $user])->get();

      return view('home', ['posts' => $allPosts, 'likes' => $allLikes]);
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
        // Depois tem q validar isso melhor dani
        return $d;
      }



      //return $post->num_likes;



    }
  }
