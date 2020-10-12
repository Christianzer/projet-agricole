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
            ->orderBy('validation','ASC')
            ->get();





        //nombre de candidat
        $nbreCand = DB::table('dossier_inscriptions')->count('dossier');

        //nombre de candidat attente
        $nbreAtt = DB::table('dossier_inscriptions')->where('validation','=',1)->count('dossier');


        //nombre de candidat admin
        $nbreAdmis = DB::table('dossier_inscriptions')->where('validation','=',2)->count('dossier');


        //nombre de candidat refuser
        $nbreRefus = DB::table('dossier_inscriptions')->where('validation','=',3)->count('dossier');

        return view('admin.dashbord',['cand'=>$result,'nbre'=>$nbreCand,'nbreAdmin'=>$nbreAdmis,'nbreAttente'=>$nbreAtt,'nbreEchec'=>$nbreRefus]);



        /*ORACLE

        $result = DB::table('CHRISTIAN.DOSSIER_INSCRIPTIONS CD')
            ->join('CHRISTIAN.CANDIDATS CC','CD.ID_CAND','=','CANDIDATS.ID_CAND')
            ->join('CHRISTIAN.ETAT CE','CD.VALIDATION','=','CE.ID_ETAT')
            ->select('CC.NOM_CANDIDAT','CC.PRENOM_CANDIDAT','CD.DATE_INSCRIPTION','CE.LIBELLE')
            ->get();

        $nbreCand = DB::table('CHRISTIAN.DOSSIER_INSCRIPTIONS')->count('DOSSIER');

        return view('admin.dashbord',['cand'=>$result,'nbre'=>$nbreCand]);

        */
    }

    public function dossier($id){
        $dossier = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->where('dossier','=',$id)
            ->select('*')->get();
        return view('admin.dossier',compact('dossier'));
    }

    public function etat(Request $request){
        //print_r($request->post('etat'));
        if ($request->post('etat')==1) {
            echo 'yes';
        }elseif ($request->post('etat')==2) {
            echo 'no';
        }
    }

    public function admis(){
        $resultAdmis = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->where('validation','=',1)
            ->orderBy('dossier','ASC')
            ->get();

        return view('admin.adminPag',compact('resultAdmis'));
    }
}
