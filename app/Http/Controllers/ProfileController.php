<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Post;
use App\Models\Like;

class ProfileController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }

  public function show($username) {
    $id = auth()->user()->id;

    $usr = User::where(['username' => $username])->get();
    $user = $usr[0];

    $posts_user = Post::where(['creator_id' => $user->id ])->orderBy('id', 'desc')->get();

    $allLikes = Like::where(['id_user' => $id])->get();

    return view('profile', ['posts' => $posts_user, 'likes' => $allLikes, 'user' => $user]);
  }
}
