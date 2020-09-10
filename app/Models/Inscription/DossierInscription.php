<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class DossierInscription extends Model
{
    //
    protected $table = 'dossier_inscriptions';
    protected $fillable = ['identifiant_candidat','mot_de_passe','id_plant','id_cand','id_empl_cand','date_inscription','validation'];
    public $timestamps = false;
}
