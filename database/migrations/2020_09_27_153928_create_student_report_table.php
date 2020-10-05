<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_full_name');
            $table->string('inputsKvantum');
            $table->string('student_count');
            $table->string('week_group_id');
            $table->timestamp('report_date_input');
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
        Schema::dropIfExists('teacher_reports');
    }
}
