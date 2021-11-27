<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnotationMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotation_media', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_annotation');
        $table->foreign('id_annotation')
            ->references('id')
            ->on('annotation')
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
        Schema::dropIfExists('annotation_media');
    }
}
