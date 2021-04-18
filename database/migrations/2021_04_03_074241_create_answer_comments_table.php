<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answercomments', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profile_id');
        });

        Schema::table('answercomments', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('users');
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
        Schema::dropIfExists('answercomments');
    }
}
