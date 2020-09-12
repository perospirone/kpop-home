<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $id = auth()->user()->id;

    $usr = User::where(['id' => $id])->get();

    $user = $usr[0];

    return view('settings', ['user' => $user]);
  }

  public function update(Request $req) {
    $id = auth()->user()->id;
    
    $usr = User::find($id);
    $usr->email         = $req->email;
    $usr->name          =	$req->name;
    $usr->username      =	$req->username;
    $usr->bio           =	$req->bio;
    $usr->status        =	$req->status;
    $usr->pais          =	$req->pais;
    $usr->estado        =	$req->estado;
    $usr->twitter_user  =	$req->twitter_user;
    $usr->fandom        =	$req->fandom;
    $usr->stan          =	$req->stan;
    $usr->ultimate      =	$req->ultimate;
    $usr->bias          =	$req->bias;

    $usr->save();

    return redirect('settings');
  }
}
