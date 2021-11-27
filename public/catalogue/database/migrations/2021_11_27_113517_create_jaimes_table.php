<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJaimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaimes', function (Blueprint $table) {
            // $table->id();
            // $table->string('id_utilisateurs')->references('id')->on('utilisateurs');
            // $table->string('id_media')->references('id')->on('medias');
            // $table->date('date');
            // $table->timestamps();

            $table->id();
            $table->unsignedBigInteger('id_utilisateurs');
            $table->unsignedBigInteger('id_media');
            $table->text('date');
            $table->timestamps();
   
            $table->foreign('id_utilisateurs')->references('id_utilisateurs')->on('utilisateurs');
            $table->foreign('id_media')->references('id_media')->on('media');
            //$table->primary(['id_utilisateur', 'id_media']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaimes');
    }
}
