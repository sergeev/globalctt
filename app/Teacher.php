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
        'teacher_full_id', 'teacher_full_name', 'teacher_kvantum_id', 'teacher_kvantum', 'teacher_desc'
    ];
}
