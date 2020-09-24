<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKvantumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kvanta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kvantum_id');
            $table->boolean('kvantum_status')->unsignedInteger()->default(1);
            $table->string('kvantum_name', 100);
            $table->integer('kvantum_teacher_id');
            //$table->foreign('teacher')->references('id')->on('teachers');
            $table->string('kvantum_desc', 1400);
            $table->string('kvantum_desc_full_txt', 5000);
            $table->integer('kvantum_program_hours_count');
            $table->string('kvantum_age', 10);
            $table->string('kvantum_number_of_people_in_the_group', 10);
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
        Schema::dropIfExists('kvanta');
    }
}
