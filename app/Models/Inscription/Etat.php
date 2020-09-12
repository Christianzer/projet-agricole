<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    //
    protected $table = 'etats';
    protected $fillable = 'libelle_etat';
    public $timestamps = false;
}
