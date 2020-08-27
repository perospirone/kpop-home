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
        $table->string('tag');
        $table->string('path_cover_image');
        $table->string('path_image');
        $table->string('content');

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
