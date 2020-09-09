<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 300);
            $table->string('content', 5000);
            $table->string('content_main_page', 300);
            $table->string('author')->unsignedInteger()->default();
            $table->string('slug', 100)->unsignedInteger()->default();
            $table->string('link_images_1', 100)->unsignedInteger()->default();
            $table->string('link_images_2', 100)->unsignedInteger()->default();
            $table->string('link_images_3', 100)->unsignedInteger()->default();
            $table->string('link_images_4', 100)->unsignedInteger()->default();
            $table->string('link_images_5', 100)->unsignedInteger()->default();
            $table->string('content_access')->unsignedInteger()->default(0);
            $table->boolean('published')->unsignedInteger()->default(0);
            $table->boolean('published_slider_status')->unsignedInteger()->default(0);
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
        Schema::dropIfExists('events');
    }
}
