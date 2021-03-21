<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierprisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossierpris', function (Blueprint $table) {
            $table->id('id_dossierpris');
            $table->integer('dossier');
            $table->integer('etat_dossier')->default(1);
            $table->string('date_rendez_vous')->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossierpris');
    }
}
