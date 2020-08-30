<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('likes', function (Blueprint $table) {
        /*$table->id();
        $table->string('title');
        $table->string('tag');
        $table->string('path_cover_image');
        $table->string('path_image');
        $table->string('content');
        $table->integer('num_likes');
        $table->integer('num_comments');
        // $table->integer('time_read');*/

        $table->id();

        $table->unsignedBigInteger('id_user');
        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        $table->unsignedBigInteger('id_post');
        $table->foreign('id_post')->references('id')->on('publications')->onDelete('cascade');

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
