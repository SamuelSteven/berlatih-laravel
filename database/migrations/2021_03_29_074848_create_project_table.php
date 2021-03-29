<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project');
            $table->string('tipe_project');
            $table->string('pengalaman');
            $table->string('role');
            $table->string('deskripsi');
            $table->string('persyaratan');
            $table->unsignedBigInteger('profile_id');
        });

        Schema::table('project', function (Blueprint $table ) {
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
        Schema::dropIfExists('project');
    }
}
