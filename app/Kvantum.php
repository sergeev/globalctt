<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kvantum extends Model
{
  protected $fillable = [
        'id', 'kvantum_id', 'kvantum_status', 'kvantum_name', 'kvantum_teacher_id' ,'kvantum_desc', 'kvantum_desc_full_txt', 'kvantum_program_hours_count', 'kvantum_age', 'kvantum_number_of_people_in_the_group'
     ];

  public function teachers()
  {
    return $this->belongsTo(Teacher::class);
  }
}
