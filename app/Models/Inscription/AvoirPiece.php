<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvoirPiece extends Model
{
    //

    protected $table = "AvoirPieces";
    protected $fillable = ['num_pi,img_pi'];
}
