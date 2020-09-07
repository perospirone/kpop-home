<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class ProfileController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }


  public function show($username) {
    $id = auth()->user()->id; 

    $posts_user = Post::where(['creator_id' => $id ])->get();

    $allLikes = Like::where(['id_user' => $id])->get();


    // dd($posts_user);

		return view('profile', ['posts' => $posts_user, 'likes' => $allLikes]);
	}
}
