<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller {

	public $objPosts;

	public function __construct() {
		$this->objPost = new Post;
	} 

  public function create(Request $req) {
    $title = $req->title;
    $tag = $req->tags;
    $content = $req->content;

    $path_cover_image;
    $path_image;

    if($req->file('cover-image')->isValid()) {
    	$path_cover_image = $req->file('cover-image')->store('images');
    }

    if($req->file('image')->isValid()) {
    	$path_image = $req->file('image')->store('images');
    }

    $id = auth()->user()->id;

    $this->objPost->create(['title' => $title, 'tag' => $tag, 'content' => $content, 'path_cover_image' => $path_cover_image, 'path_image' => $path_image, 'creator_id' => $id]);

  }

  // Metodo pra mostrar todos os posts na pagina inicial
  public function index() {
  	$objPosts = new Post;

  	dd($objPosts->all());
  }
}
