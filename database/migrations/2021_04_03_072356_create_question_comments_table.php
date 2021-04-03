<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questioncomments', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->timestamp('tanggal_dibuat');
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('question_id'); 
        });

        Schema::table('questioncomments', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questioncomments');
    }
}
