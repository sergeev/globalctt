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
            $table->text('link_images_1');
            $table->text('link_images_2');
            $table->text('link_images_3');
            $table->text('link_images_4');
            $table->text('link_images_5');
            $table->text('content_access');
            $table->boolean('organization_show')->unsignedInteger()->default(10);
            $table->boolean('published')->unsignedInteger()->default(0);
            $table->boolean('published_slider_status')->unsignedInteger()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('comments');
    }
}
