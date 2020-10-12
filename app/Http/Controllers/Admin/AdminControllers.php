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
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->orderBy('dossier','ASC')
            ->get();

        $nbre = DB::table('dossier_inscriptions')->count('dossier');

        return view('admin.dashbord',['cand'=>$result,'nbre'=>$nbre]);

        /*ORACLE

        $result = DB::table('CHRISTIAN.DOSSIER_INSCRIPTIONS CD')
            ->join('CHRISTIAN.CANDIDATS CC','CD.ID_CAND','=','CANDIDATS.ID_CAND')
            ->join('CHRISTIAN.ETAT CE','CD.VALIDATION','=','CE.ID_ETAT')
            ->select('CC.NOM_CANDIDAT','CC.PRENOM_CANDIDAT','CD.DATE_INSCRIPTION','CE.LIBELLE')
            ->get();

        $nbre = DB::table('CHRISTIAN.DOSSIER_INSCRIPTIONS')->count('DOSSIER');

        return view('admin.dashbord',['cand'=>$result,'nbre'=>$nbre]);

        */
    }
}
