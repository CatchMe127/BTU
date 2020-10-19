<?php

namespace App;

use Illuminate\Database\Eloquent\model;


class Movies extands Model{
	protected $fillable=[
		'ganres',
		'title',
		'year',
		'description',
		'image',
		'IMDB'
	];

}