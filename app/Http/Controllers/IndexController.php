<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Models\Post;
use Inertia\Inertia;

class IndexController extends Controller {
  public function index() {
    $allPosts = Post::all()->sortByDesc("id");
    
    return Inertia::render('index-page', [
      'posts' => $allPosts,
    ]);
  }
}
