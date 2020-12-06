<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Организация
            $table->boolean('organization')->unsignedInteger()->default();
            // Название урока "опционально"
            $table->string('topic');
            // Ф.И.О
            $table->string('teacher_full_name');
            // Направление
            $table->string('kvantum_name');
            // День недели преподавания
            $table->string('week_day');
            // Время занятия
            $table->string('week_time');
            // Группа
            $table->string('week_group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetables');
    }
}
