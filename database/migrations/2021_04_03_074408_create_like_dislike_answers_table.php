<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_answers', function (Blueprint $table) {
            $table->bigIncrements('poin');
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profile_id');
        });

        Schema::table('like_dislike_answers', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('answer_id')->references('id')->on('answers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_answers');
    }
}
