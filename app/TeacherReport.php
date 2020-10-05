<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherReport extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'teacher_full_name', 
        'inputsKvantum', 
        'student_count',
        'week_group_id',
        'report_date_input'
    ];

    public function teacher()
    {
      return $this->belongsTo(Teacher::class);
    }
}