<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
	public $table = 'blog_posts';

	protected $fillable = [
		'header', 'category', 'slug',  'body', 'author_id', 'meta_title', 'meta_description', 'meta_keywords'
	];

	protected $guarded = [
		'id'
	];

	public $timestamps = true;

	public function author()
	{
		return $this->hasOne('App\User', 'id', 'author_id');
	}
}
