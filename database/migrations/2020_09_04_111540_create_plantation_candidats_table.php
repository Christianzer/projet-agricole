<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantationCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantation_candidats', function (Blueprint $table) {
            $table->id();
            $table->integer("id_type_culture");
            $table->string("localisation_plantation");
            $table->string("superficie_plantation");
            $table->integer("id_methode_culture");
            $table->string("certificat_propriete");
            $table->integer("id_candidat");
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
        Schema::dropIfExists('plantation_candidats');
    }
}
