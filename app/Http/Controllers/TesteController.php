<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TesteController extends Controller
{
  public function teste()
  {
    return Inertia::render('index-page');
  }
}
