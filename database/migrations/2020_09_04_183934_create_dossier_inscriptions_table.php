<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_inscriptions', function (Blueprint $table) {
            $table->id('dossier');
            $table->string('identifiant_candidat');
            $table->string('mot_de_passe');
            $table->integer('id_plant');
            $table->integer('id_cand');
            $table->integer('id_empl_cand');
            $table->string('date_inscription');
            $table->integer('validation')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossier_inscriptions');
    }
}
