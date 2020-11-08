<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'teacher_full_id', 
        'teacher_full_name',
        'organization_show',
        'link_images_1', 
        'link_web_main',
        'link_web_facebook',
        'link_web_twitter',
        'link_web_skype',
        'link_web_google',
        'link_web_vk',
        'teacher_kvantum_id', 
        'teacher_kvantum', 
        'teacher_desc'
    ];

    public function kvantums()
    {
        return $this->hasMany(Kvantum::class);
    }
}
