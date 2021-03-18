<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = [
		'title', 'content_main_page', 'content', 'author' ,'slug', 'link_images_1', 'link_images_2', 'link_images_3', 'link_images_3',
		'link_images_4', 'link_images_5',  'content_access', 'organization_show', 'published', 'published_slider_status'
	];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
