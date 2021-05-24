<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Event extends Model
{
    use SoftDeletes, Searchable;

    const SEARCHABLE_FIELDS = ['id', 'title', 'content'];

    protected $dates = ['deleted_at'];

	protected $fillable = [
		'title', 'content_main_page', 'content', 'author' ,'slug', 'link_images_1', 'content_access', 'organization_show', 'published', 'published_slider_status', 'published_date_start', 'published_date_end',  'view_count'
	];

	public function toSearchableArray()
    {
        return $this->only(self::SEARCHABLE_FIELDS);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
