<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtsiteMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artsite_media', function (Blueprint $table) {
            $table->id('id_artiste');
            $table->id('id_media');
            $table->timestamps();

            $table->unsignedBigInteger('id_artiste');
        $table->foreign('id_artiste')
            ->references('id')
            ->on('artiste')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        $table->unsignedBigInteger('id_media');
        $table->foreign('id_media')
            ->references('id')
            ->on('media')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artsite_media');
    }
}
