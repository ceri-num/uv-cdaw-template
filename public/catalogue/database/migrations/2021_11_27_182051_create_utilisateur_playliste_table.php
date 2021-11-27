<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurPlaylisteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur_playliste', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_playliste');
            $table->unsignedBigInteger('id_utilisateurs');
            $table->text('date');
            $table->timestamps();
   
            $table->foreign('id_playliste')->references('id')->on('playlistes');
            $table->foreign('id_utilisateurs')->references('id_utilisateurs')->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur_playliste');
    }
}
