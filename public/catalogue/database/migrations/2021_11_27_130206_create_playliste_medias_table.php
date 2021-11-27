<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylisteVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playliste_videos', function (Blueprint $table) {
            $table->id('id_playliste');
            $table->date('date');
            $table->timestamps();
            $table->primary(['is_playliste', 'id_media']);

            $table->unsignedBigInteger('id_playliste');
        $table->foreign('id_playliste')
            ->references('id')
            ->on('playliste')
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
        Schema::dropIfExists('playliste_videos');
    }
}
