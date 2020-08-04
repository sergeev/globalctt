<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('organization')->unsignedInteger()->default();
            $table->char('inputsCertificate', 10);
            $table->string('name_1_ot', 100);
            $table->string('surname_1_fam', 100);
            $table->string('inputEmail')->unique();
            $table->binary('childDateInput');
            $table->boolean('gender')->unsignedInteger()->default(NULL);
            $table->text('inputsSchool', 100);
            $table->string('inputsClass');
            $table->string('inputsKvantum');
            $table->string('teacherName');
            $table->string('groupTime');
            $table->string('inputsNameLegalRepresentative');
            $table->string('NameLegalRepresentativeTelephone');
            $table->string('inputsComments', 400);
            // Ранг, экспа, монеты
            $table->string('student_rang')->unsignedInteger()->default(0);
            $table->string('student_exp')->unsignedInteger()->default(0);
            $table->string('student_coin')->unsignedInteger()->default(0);
            // проверка студента 0 - нет 1 - да
            $table->boolean('student_checked')->unsignedInteger()->default(0);
            $table->boolean('student_deleted')->unsignedInteger()->default(0);

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
        Schema::dropIfExists('students');
    }
}
