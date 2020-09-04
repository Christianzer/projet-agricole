<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string("photo_candidat");
            $table->string("nom_candidat");
            $table->string("prenom_candidat");
            $table->date("date_naiss_candidat");
            $table->string("lieu_nais_candidat");
            $table->string("nationalite_candidat");
            $table->integer("id_type_diplome");
            $table->integer("contact_candidat");
            $table->string("mail_candidat");
            $table->integer("id_type_piece");
            $table->integer("num_piece");
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
        Schema::dropIfExists('candidats');
    }
}
