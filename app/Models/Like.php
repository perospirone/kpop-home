<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	protected $table = 'likes';
	//protected $fillable = ['title', 'tag', 'path_cover_image', 'path_image', 'content', 'creator_id', 'num_likes', 'num_comments'];

	public function relUsers() {
		return $this->hasOne('App\User', 'id_user', 'id');
	}

	public function relPost() {
		return $this->hasOne('App\Models\Post', 'id_post', 'id');
		return $this->belongsToMany();
	}
}
