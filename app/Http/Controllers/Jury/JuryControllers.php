<?php

namespace App\Http\Controllers\Jury;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JuryControllers extends Controller
{
    //
    public function index(){
        return view('Jury.connexionjury');
    }

    public function connexion(Request $request){
        $identifiant=$request->post('email');
        $mdp_jury=$request->post('pass');

        $jury = DB::table('jury')
            ->where('identifiant_jury','=',$identifiant)
            ->where('mdp_jury','=',$mdp_jury)->count();
        if ($jury == 1) {
            $nomJury = DB::table('jury')
                ->where('identifiant_jury','=',$identifiant)
                ->where('mdp_jury','=',$mdp_jury)->get();
            $nom = $nomJury[0]->nom_jury;
            $dossierOk = DB::table('visite')
                ->where('identifiant_jury','=',$identifiant)
                ->join('dossierpris','dossierpris.dossier','=','visite.dossier')
                ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','visite.dossier')
                ->join('candidats','candidats.id_cand','=','dossier_inscriptions.id_cand')
                ->get();
            $request->session()->put(['test'=>$dossierOk,'nom'=>$nom]);

            return redirect()->route('jury.appreciation');
        }else {
            return redirect()->route('index.jury');
        }

    }

    public function appreciation(){
        return view('Jury.dashboard');
    }

    public function deconnexion(){
        session()->flush();
        return redirect()->route('index.jury');
    }

    public function notes($id){
        $doc = DB::table('visite')
            ->where('id_visite','=',$id)
            ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','visite.dossier')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
            ->get();
        if ($doc[0]->id_type_cult == 1) {
            return view('Jury.formulaireCafe',compact('doc'));
        }elseif ($doc[0]->id_type_cult == 2){
            return view('Jury.formulaireCacao',compact('doc'));
        }
    }
}
