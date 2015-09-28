<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('peserta', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('score');
            $table->boolean('enabled')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('soal', function ($table) {
            $table->increments('id');
            $table->string('soalid');
            $table->string('soal');
            $table->string('keterangan');
            $table->string('jawaban');
            $table->boolean('enabled')->nullable();
            $table->softDeletes();
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
        Schema::drop('peserta');
        Schema::drop('soal');
    }
}
