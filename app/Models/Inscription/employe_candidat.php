<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class employe_candidat extends Model
{
    //
    protected $table = 'employe_candidats';
    protected $fillable = ['nombre_employe','nombre_femme','salire_moyen','mineur','certificat_employe'];
    protected $timestamps = false;
}
