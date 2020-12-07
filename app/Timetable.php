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
         'week_day_1',
         'week_day_2',
         'week_day_3',
         'week_day_4',
         'week_day_5',
         'week_day_6',
         'week_day_7',
         'week_time_day_1',
         'week_time_day_2',
         'week_time_day_3',
         'week_time_day_4',
         'week_time_day_5',
         'week_time_day_6',
         'week_time_day_7',
         'week_group_id'
    ];
}
