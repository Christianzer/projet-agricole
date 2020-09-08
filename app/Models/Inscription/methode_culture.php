<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class methode_culture extends Model
{
    //
    protected $table = 'methode_cultures';
    protected $fillable = ['id_methodes_cultures','libelle_methodes_cultures'];
}
