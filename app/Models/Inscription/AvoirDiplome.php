<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class AvoirDiplome extends Model
{
    //
    protected $table = "avoir_diplomes";
    protected $fillable = ['num_dip,img_dip'];
    public $timestamps = false;

}
