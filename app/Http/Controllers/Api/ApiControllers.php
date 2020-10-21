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
            ->join('notificationapi','dossier_inscriptions.dossier','=','notificationapi.dossierid')
            ->join('message','message.id','=','notificationapi.message')
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->where('identifiant_candidat','=',$identifiant)
            ->where('mot_de_passe','=',$mdp)
            ->select('*')->get();
        $resultJson = $result->toJson(JSON_PRETTY_PRINT);
        return response($resultJson, 200);

    }

    public function modifetat(Request $request){
        $dossier = (int)$request->input('numdossier');
        $etatDoc = (int)$request->input('etat');
        $result = DB::table("notificationapi")->where('dossierid','=',$dossier)->update(['etat'=>$etatDoc]);
        $resultJson = $result->toJson(JSON_PRETTY_PRINT);
        return response($resultJson, 200);
    }

    public function notification($identifiant_candidat){
        $resultNotif = DB::table("notificationapi")
            ->join('message','message.id','=','notificationapi.message')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','notificationapi.dossierid')
            ->join('candidats','candidats.id_cand','=','dossier_inscriptions.id_cand')
            ->where('dossier_inscriptions.identifiant_candidat','=',$identifiant_candidat)
            ->select("*")->get();
        $resultajson = $resultNotif->toJson(JSON_PRETTY_PRINT);
        return response($resultajson,200);
    }
}
