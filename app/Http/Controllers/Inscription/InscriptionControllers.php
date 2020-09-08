<?php

namespace App\Http\Controllers\Inscription;

use App\Http\Controllers\Controller;
use App\Models\Inscription\AvoirCulture;
use App\Models\Inscription\AvoirDiplome;
use App\Models\Inscription\AvoirMethode;
use App\Models\Inscription\AvoirPiece;
use App\Models\Inscription\candidat;
use App\Models\Inscription\DossierInscription;
use App\Models\Inscription\employe_candidat;
use App\Models\Inscription\methode_culture;
use App\Models\Inscription\plantation_candidat;
use App\Models\Inscription\type_culture;
use App\Models\Inscription\type_diplome;
use App\Models\Inscription\type_piece;
use Illuminate\Http\Request;


class InscriptionControllers extends Controller
{
    //

    public function index(){
        return view('Inscription/index');
    }


}
