<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class Post extends Model {
  use MediaAlly;

	protected $table = 'publications';
	protected $fillable = ['title', 'tags', 'path_cover_image', 'path_image', 'content', 'creator_id', 'num_likes', 'num_comments', 'name_author', 'username_author'];

  public function relUsers() {
	  return $this->hasOne('App\User', 'id', 'creator_id');
	}
}
