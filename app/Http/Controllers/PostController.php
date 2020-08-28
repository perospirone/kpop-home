<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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

  	$likes = $post->num_likes;

  	//dd($post->num_likes);

  	//dd($req);

  	$likes = $post->num_likes;

		$post->num_likes =  $likes + 1;

		$post->save();


  	//return $post->num_likes;


  }
}
