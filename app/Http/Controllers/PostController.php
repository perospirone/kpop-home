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
    $tags = null;
    $content = '';

    $content = str_replace(['<script>', '</script>'], ' ', $req->content);

    $path_cover_image;
    $path_image;

    if($req->file('cover-image') === null) {
      $path_cover_image = null;
    } elseif($req->file('cover-image')->isValid()) {
      
      // Integração com cloudinary aqui 
      $path_cover_image = $req->file('cover-image')->storeOnCloudinary()->getSecurePath();

      // Proprio do laravel
      // $path_cover_image = $req->file('cover-image')->store('public/images');
      // $path_cover_image = str_replace('public/', '', $path_cover_image);
    }

    if($req->file('image') === null) {
      $path_image = null;
    } elseif($req->file('image')->isValid()) {
      $path_image = $req->file('image')->store('public/images');
      $path_image = str_replace('public/', '', $path_image);
    }

    $id = auth()->user()->id;

    $name_author = auth()->user()->name;

    $username_author = auth()->user()->username;

    $post = $this->objPost->create(['title' => $title, 'tags' => $tags, 'content' => $content, 'path_cover_image' => $path_cover_image, 'path_image' => $path_image, 'creator_id' => $id, 'num_likes' => 0, 'num_comments' => 0, 'name_author' => $name_author, 'username_author' => $username_author]);

    return redirect("/post/$post->id");
  }

  // Metodo pra mostrar todos os posts na pagina inicial
  public function index() {
    $allPosts = Post::all()->sortByDesc("id");

    $id = auth()->user()->id;

    $usr = User::where(['id' => $id])->get();

    $user = $usr[0];

    $allLikes = Like::where(['id_user' => $id])->get();

    return view('home', ['posts' => $allPosts, 'likes' => $allLikes, 'user' => $user]);
  }

  public function show($id) {
    $pst = Post::where(['id' => $id])->get();
    $post = $pst[0];

    $id_user = $post->creator_id;

    $usr = User::where(['id' => $id_user])->get();
    $user = $usr[0];

    $user->joined = date("d/m/Y H:i:s", strtotime($user->created_at));
    $post->data = date("d/m/Y H:i:s", strtotime($post->created_at));

    $like = Like::where(['id_user' => $id_user, 'id_post' => $id])->first();

    if($like == null) {
      $deulike = false;
    } else {
      $deulike = true;
    }

    return view('post', ['user' => $user, 'post' => $post, 'like' => $deulike]);
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
