<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_full_id', 100)->unsignedInteger()->default();
            $table->string('teacher_full_name');
            $table->string('link_images_1', 100)->unsignedInteger()->default('./images/.');
            $table->string('link_web_main', 100)->unsignedInteger()->default();
            $table->string('link_web_facebook', 100)->unsignedInteger()->default();  
            $table->string('link_web_twitter', 100)->unsignedInteger()->default();             
            $table->string('link_web_skype', 100)->unsignedInteger()->default();  
            $table->string('link_web_google', 100)->unsignedInteger()->default(); 
            $table->string('link_web_vk', 100)->unsignedInteger()->default();  
            $table->integer('teacher_kvantum_id')->unsigned();
            //$table->string('teacher_kvantum')->unsignedInteger()->default();
            //$table->foreign('teacher_kvantum')->references('id')->on('kvantums');
            $table->string('teacher_desc', 300);
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
        Schema::dropIfExists('teachers');
    }
}
