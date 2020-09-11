<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $table = 'publications';
	protected $fillable = ['title', 'tags', 'path_cover_image', 'path_image', 'content', 'creator_id', 'num_likes', 'num_comments'];

  public function relUsers() {
	  return $this->hasOne('App\User', 'id', 'creator_id');
	}
}