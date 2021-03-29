<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->timestamp('tanggal_dibuat');
            $table->string('pemberi_komentar_id');
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('komentar_id');
        });

        Schema::table('komentar', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
            
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar');
    }
}
