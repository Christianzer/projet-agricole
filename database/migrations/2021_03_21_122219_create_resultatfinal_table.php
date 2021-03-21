<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatfinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultatfinal', function (Blueprint $table) {
            $table->id('idresultatfinal');
            $table->float('moyennefinal');
            $table->string('date_fin');
            $table->integer('dossier');
            $table->integer('etat');
            $table->string('sticker');
            $table->string('date_resultat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultatfinal');
    }
}
