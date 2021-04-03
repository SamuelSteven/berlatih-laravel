<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('judul',45);
            $table->string('isi');
            $table->unsignedBigInteger('jawaban_tepat_id');
            $table->unsignedBigInteger('profile_id');
            $table->timestamps();
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profiles');
            // $table->foreign('jawaban_tepat_id')->references('id')->on('answers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
