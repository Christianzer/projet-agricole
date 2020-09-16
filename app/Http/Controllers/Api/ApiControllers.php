<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiControllers extends Controller
{
    //
    public function connexion(Request $request){

        $identifiant = $request->input('email');
        $mdp = $request->input('pass');
        $result = DB::table("dossier_inscriptions")
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('plantation_candidats','dossier_inscriptions.id_plant','=','plantation_candidats.id_plant')
            ->join('employe_candidats','dossier_inscriptions.id_empl_cand','=','employe_candidats.id_empl_cand')
            ->where('identifiant_candidat','=',$identifiant)
            ->where('mot_de_passe','=',$mdp)
            ->select('*')->get();

        $resultJson = $result->toJson(JSON_PRETTY_PRINT);

        return response($resultJson, 200);


    }
}
