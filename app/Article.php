<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public $table = 'articles';

	protected $fillable = [
		'header', 'authors', 'link', 'published_at'
	];

	protected $guarded = [
		'id'
	];

	public $timestamps = true;
}
