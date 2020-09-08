<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
         'topic',
         'teacher_full_name',
         'kvantum_name',
         'week_day',
         'week_time',
         'week_group_id'
    ];
}
