<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('like_id');
            $table->unsignedBigInteger('dislike_id');
        });

        Schema::table('vote', function (Blueprint $table) {
            $table->foreign('like_id')->references('id')->on('like');
            $table->foreign('dislike_id')->references('id')->on('dislike');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
}
