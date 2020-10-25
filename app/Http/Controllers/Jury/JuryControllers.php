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
            $request->session()->put(['nom'=>$nom,'identifiant'=>$identifiant]);
            return redirect()->route('jury.appreciation');
        }else {
            Session()->flash('success','Identifiant ou Mot de Passe errone.');
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
        return view('Jury.formulaire',compact('doc'));

    }

    public function controle(Request $request){
        //prendre en compte les bonus
        $jury = $request->input('jury');
        $doc = $request->post('document');
        $cacaoDiv = 13;
        $cafeDiv = 12;
        $visite = $request->post('visite');
        $culture = $request->post('culture');
        $etat = (double)$request->post('etat');
        $espace = (double)$request->post('espace');
        $proprete = (double)$request->post('proprete');
        $beaute = (double)$request->post('beaute');
        $sain = (double)$request->post('sain');
        $gout = (double)$request->post('gout');
        $humidite = (double)$request->post('humidite');
        $engrais = (double)$request->post('engrais');
        $protection = (double)$request->post('protection');
        $production = (double)$request->post('production');
        $sechage = (double)$request->post('sechage');
        $fermentation = (double)$request->post('fermentation');
        $conservation = (double)$request->post('conservation');
        $bonus = (double)$request->post('bonus');
        $appreciation = $request->post('appreciation');
        $comment = $request->post('comment');
        $date = date('d-m-Y');
        $total = $etat+$espace+$proprete+$beaute+$sain+$gout+$humidite+$engrais+$protection+$production+$sechage+$fermentation+$conservation+$bonus;
        if ($culture == 1) {
            $MoyenneTotal = $total / $cafeDiv;
        }elseif ($culture == 2){
            $MoyenneTotal = ($total / $cacaoDiv);
        }

        $requete = DB::table('visite')
            ->where('id_visite','=',$visite)
            ->update(['moyenne_obtenue'=>$MoyenneTotal,'etat'=>2,'date_note'=>$date,'commentaire'=>$comment,'appreciation'=>$appreciation]);

        if ($requete) {

            $nbreJury = DB::table('jury')->count('id_jury');

            $test = DB::table('visite')
                ->selectRaw('count(etat) as nbretat,sum(moyenne_obtenue) as total')
                ->groupBy('dossier')
                ->where('dossier','=',$doc)
                ->where('etat','=',2)->get();
            $date = date('Y-M-D');
            if ($nbreJury == $test[0]->nbretat) {
                $dossier = $doc;
                $total = $test[0]->total;
                $mg = (float) $total / $nbreJury;
                $var = array(
                    'moyennefinal'=>$mg,
                    'dossier'=>$dossier,
                    'date_fin'=>$date
                );
                $enreMoy = DB::table('resultatfinal')->insert($var);
            }
            Session()->flash('success','Visite de la parcelle effectue avec succes.');
            return redirect()->route('jury.appreciation');
        }


    }
}
