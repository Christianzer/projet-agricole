<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class type_culture extends Model
{
    //
    protected $table = "type_cultures";
    protected $fillable = ['libelle_type_cultures'];
    public $timestamps = false;
}
