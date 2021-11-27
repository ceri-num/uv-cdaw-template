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
            $table->id('id_utilisateur');
            $table->id('id_media');
            $table->date('date');
            $table->timestamps();

            $table->primary(['is_utilisateur', 'id_media']);
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
