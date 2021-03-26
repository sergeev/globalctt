<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = [
		'title', 'content_main_page', 'content', 'author' ,'slug', 'link_images_1', 'content_access', 'organization_show', 'published', 'published_slider_status', 'view_count'
	];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
