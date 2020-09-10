<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class AvoirMethode extends Model
{
    //
    protected $table = 'avoir_methodes';
    protected $fillable = ['id_plant','id_methode'];
    public $timestamps = false;
}
