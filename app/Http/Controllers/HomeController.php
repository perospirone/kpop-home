<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Post;


class HomeController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() { 
    return redirect('home');
    
    $allPosts = Post::all();
    
    return view('index', ['posts' => $allPosts, 'algumacoisa' => 'da']);
  }
}
