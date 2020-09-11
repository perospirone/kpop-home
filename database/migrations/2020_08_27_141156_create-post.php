<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publications', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('tags')->nullable();
        $table->string('path_cover_image')->nullable();
        $table->string('path_image')->nullable();
        $table->string('content');
        $table->integer('num_likes');
        $table->integer('num_comments');
        // $table->integer('time_read');


        $table->unsignedBigInteger('creator_id');

        $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');

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
      Schema::dropIfExists('publications');
    }
}
