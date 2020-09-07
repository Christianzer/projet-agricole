<?php

namespace App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;

class type_diplome extends Model
{
    //
    protected $table = "type_diplomes";
    protected $fillable = ['libelle_type_diplomes'];
}
