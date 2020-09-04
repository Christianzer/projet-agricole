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
            $table->id();
            $table->integer("id_candidat");
            $table->integer("nombre_employe");
            $table->integer("nombre_femme");
            $table->integer("salaire_moyen");
            $table->boolean("mineur")->default(1);
            $table->string("piece_employe");
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
        Schema::dropIfExists('employe_candidats');
    }
}
