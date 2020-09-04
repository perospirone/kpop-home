<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	protected $table = 'likes';
	//protected $fillable = ['title', 'tag', 'path_cover_image', 'path_image', 'content', 'creator_id', 'num_likes', 'num_comments'];
  protected $fillable = ['id_user', 'id_post'];

	public function relUsers() {
    return $this->belongsToMany('App\User');
	}

	public function relPost() {
		return $this->belongsToMany('App\Models\Post');
	}
}
