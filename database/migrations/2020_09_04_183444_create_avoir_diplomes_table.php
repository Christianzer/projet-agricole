<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvoirDiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoir_diplomes', function (Blueprint $table) {
            $table->id('id_av_dip');
            $table->integer('diplomes');
            $table->integer('id_cand');
            $table->string('num_dip');
            $table->string('img_dip');
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
        Schema::dropIfExists('avoir_diplomes');
    }
}
