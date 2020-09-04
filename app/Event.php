<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = [
		'title', 'content', 'author' ,'slug', 'link_images_1', 'link_images_2', 'link_images_3', 'link_images_3',
		'link_images_4', 'link_images_5',  'content_access', 'published', 'published_slider_status' 
	];
}