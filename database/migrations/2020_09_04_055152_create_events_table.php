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
            $table->string('content_main_page', 500);
            $table->string('author')->unsignedInteger()->default();
            $table->string('slug', 100)->unsignedInteger()->default();
            $table->text('link_images_1')->nullable();
            $table->text('content_access')->nullable();
            $table->boolean('organization_show')->unsignedInteger()->default(1);
            $table->boolean('published')->unsignedInteger()->default(0);
            $table->boolean('published_slider_status')->unsignedInteger()->default(0);
            $table->date('published_date_start');
            $table->date('published_date_end');
            $table->integer('view_count')->default(0);
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
