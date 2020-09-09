<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvoirPiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoir_pieces', function (Blueprint $table) {
            $table->id('id_av_pi');
            $table->integer('pieces');
            $table->integer('id_cand');
            $table->string('num_pi');
            $table->string('img_pi');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avoir_pieces');
    }
}
