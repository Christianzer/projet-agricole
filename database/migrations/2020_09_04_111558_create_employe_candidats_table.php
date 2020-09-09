<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_candidats', function (Blueprint $table) {
            $table->id('id_empl_cand');
            $table->integer("nombre_employe");
            $table->integer("nombre_femme");
            $table->integer("salaire_moyen");
            $table->integer("mineur")->default(1);
            $table->string("certificat_employe");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe_candidats');
    }
}
