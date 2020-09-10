<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminControllers extends Controller
{
    //
    public function index(){

        $result = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->select('candidats.nom_candidat','candidats.prenom_candidat','dossier_inscriptions.date_inscription','dossier_inscriptions.validation')
            ->get();

        $nbre = DB::table('dossier_inscriptions')->count('dossier');

        return view('admin.dashbord',['cand'=>$result,'nbre'=>$nbre]);

    }
}
