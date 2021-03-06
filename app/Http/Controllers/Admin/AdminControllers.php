<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AdminControllers extends Controller
{
    //
    public function index(){

        $result = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
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
            ->where('dossier','=',$id)
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('plantation_candidats','dossier_inscriptions.id_plant','=','plantation_candidats.id_plant')
            ->join('employe_candidats','dossier_inscriptions.id_empl_cand','=','employe_candidats.id_empl_cand')
            ->join('avoir_diplomes','candidats.id_cand','=','avoir_diplomes.id_cand')
            ->join('type_diplomes','type_diplomes.id_type_diplomes','=','avoir_diplomes.diplomes')
            ->join('avoir_pieces','candidats.id_cand','=','avoir_pieces.id_cand')
            ->join('type_pieces','type_pieces.id_piece','=','avoir_pieces.pieces')
            ->join('avoir_methodes','avoir_methodes.id_plant','=','plantation_candidats.id_plant')
            ->join('methode_cultures','methode_cultures.id_methodes_cultures','=','avoir_methodes.id_methode')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','plantation_candidats.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->get();
        return view('admin.dossier',compact('dossier'));
    }

    public function etat(Request $request){
        $dossier = DB::table('dossier_inscriptions')
            ->where('dossier','=',$request->post('codeDossier'))
            ->update(['validation'=>$request->post('etat')]);
        if ($request->post('etat')==2) {
            $valueapi = array(
                'dossierid'=>$request->post('codeDossier'),
                'message'=>2
            );
            $insetApi = DB::table("notificationapi")->insert($valueapi);
            $insertDoss = DB::table("dossierpris")->insert(['dossier'=>(integer)$request->post('codeDossier')]);
        }else {
            $valueapi = array(
                'dossierid'=>$request->post('codeDossier'),
                'message'=>3
            );
            $insetApi = DB::table("notificationapi")->insert($valueapi);
        }
        Session()->flash('success','Etat du dossier affecté avec succes.');
        return redirect()->route('admin.index');
    }

    public function admis(){
        $resultAdmis = DB::table('dossierpris')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','dossierpris.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('AVOIR_CULTURES','AVOIR_CULTURES.id_plant','=','dossier_inscriptions.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','AVOIR_CULTURES.id_type_cult')
            ->orderBy('dossier_inscriptions.dossier','ASC')
            ->get();

        return view('admin.adminPag',compact('resultAdmis'));
    }

    public function rendez_vous(Request $request){
        $dossier = DB::table('dossierpris')
            ->where('dossier','=',$request->post('numDo'))
            ->update(['date_rendez_vous'=>$request->post('dateRendez')]);
        $valueapi = array(
            'dossierid'=>$request->post('numDo'),
            'message'=>4,
            'info'=>$request->post('dateRendez')
        );
        $insetApi = DB::table("notificationapi")->insert($valueapi);
        $jury = DB::table('jury')->select('identifiant_jury as identifiant')->get();
        foreach ($jury as $entre){
            $entrerVisite = DB::table('visite')->insert(['identifiant_jury'=>$entre->identifiant,'dossier'=>$request->post('numDo')]);
        }
        Session()->flash('success','Mise en place du rendez vous effectue avec succes.');
        return redirect()->route('admin.admis');
    }

    public function resultatJuryCafe(){
        $resFin = DB::table('resultatfinal')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','resultatfinal.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('avoir_cultures.id_type_cult','=',1)
            ->orderBy('moyennefinal','DESC')
            ->select('*')
            ->get();

        $countNbrResult = DB::table('resultatfinal')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','resultatfinal.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('avoir_cultures.id_type_cult','=',1)->count();

        $countNbrePart = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('dossier_inscriptions.validation','=',2)
            ->where('avoir_cultures.id_type_cult','=',1)
            ->count();

        return view('admin.resultatJuryCafe',compact(['resFin','countNbrePart','countNbrResult']));
    }

    public function resultatJuryCacao(){
        $resFin = DB::table('resultatfinal')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','resultatfinal.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('avoir_cultures.id_type_cult','=',2)
            ->orderBy('moyennefinal','DESC')
            ->select('*')
            ->get();

        $countNbrResult = DB::table('resultatfinal')
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','resultatfinal.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('avoir_cultures.id_type_cult','=',2)->count();

        $countNbrePart = DB::table('dossier_inscriptions')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->where('dossier_inscriptions.validation','=',2)
            ->where('avoir_cultures.id_type_cult','=',2)
            ->count();


        return view('admin.resultatJuryCacao',compact(['resFin','countNbrePart','countNbrResult']));
    }

    public function recompense(Request $request){
        $dossier = $request->post('numDo');
        $type = $request->post('type');
        $date = date('d-m-Y');
        if($fileSticker = $request->file('sticker')){
            $nomSticker= time().time().'.'.$fileSticker->getClientOriginalExtension();
            $target =  public_path('/dossiers/sticker/');
            if($fileSticker->move($target, $nomSticker)) {
                $sticker = $nomSticker;
            }
        }
        $etatResult = DB::table('resultatfinal')->where('dossier','=',$dossier)->update(['etat'=>2,'sticker'=>$sticker,'date_resultat'=>$date]);
        $typeCult = DB::table('dossier_inscriptions')
            ->where('dossier_inscriptions.dossier','=',$dossier)
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')->get();
        if ($etatResult) {
            $valueapi = array(
                'dossierid'=>$dossier,
                'message'=>5
            );
            $insetApi = DB::table("notificationapi")->insert($valueapi);
            $select = DB::table('dossier_inscriptions')
                ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
                ->select('dossier')
                ->where('dossier_inscriptions.dossier','<>',$dossier)
                ->where('avoir_cultures.id_type_cult','=',$typeCult[0]->id_type_cult)
                ->get();
            foreach ($select as $doc){
                DB::table('resultatfinal')->where('dossier','=',$doc->dossier)->update(['etat'=>3]);
                $valueapi = array(
                    'dossierid'=>$doc->dossier,
                    'message'=>5
                );
                $insetApi = DB::table("notificationapi")->insert($valueapi);
            }
            Session()->flash('success','Deliberation effectué avec succes.');
            return redirect()->route('admin.index');

        }
    }


}
