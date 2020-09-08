<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class Plantation extends Model
{
    //
    protected $table='plantation_candidats';

    protected $fillable = ['localisation_plantation','superficie_plantation','certificat_propriete'];
}
