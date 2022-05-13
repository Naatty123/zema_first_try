<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('music_name');
            $table->string('music_format');
            $table->string('music_genre');
            $table->string('music_duration');
            $table->string('music_size');
            $table->string('music_title');
            $table->string('music_type');
            $table->string('music_track_num');
            $table->string('music_like');
            $table->string('music_image');
            $table->unsignedBigInteger('artist_id');
            $table->timestamps();
            $table->string('hashtag');
            $table->string('listen_count');
            $table->string('album');
            $table->string('cont_artists');

            $table->foreign('artist_id')->references('id')->on('artist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
