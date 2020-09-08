<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class candidat extends Model
{
    //
    protected $table= "candidats";
    protected $fillable = ['photo_candidat','nom_candidat','prenom_candidat','date_naiss_candidat','lieu_naiss_candidat','nationalite_candidat','contact_candidat','mail_candidat'];
}
