<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylisteUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playliste_utilisateurs', function (Blueprint $table) {
            $table->id('id_utilisateur');
            $table->id('id_playliste');
            $table->date('date');
            $table->timestamps();

            $table->primary(['is_utilisateur', 'id_playliste']);

            $table->unsignedBigInteger('id_utilisateur');
        $table->foreign('id_utilisateur')
            ->references('id')
            ->on('utilisateur')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        $table->unsignedBigInteger('id_playliste');
        $table->foreign('id_playliste')
            ->references('id')
            ->on('playliste')
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
        Schema::dropIfExists('playliste_utilisateurs');
    }
}
