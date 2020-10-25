<?php

namespace App\Http\Controllers;

use App\Helpers\Sms;
use App\Models\Inscription\AvoirCulture;
use App\Models\Inscription\AvoirDiplome;
use App\Models\Inscription\AvoirMethode;
use App\Models\Inscription\AvoirPiece;
use App\Models\Inscription\candidat;
use App\Models\Inscription\DossierInscription;
use App\Models\Inscription\employe_candidat;
use App\Models\Inscription\methode_culture;
use App\Models\Inscription\Plantation;
use App\Models\Inscription\plantation_candidat;
use App\Models\Inscription\type_culture;
use App\Models\Inscription\type_diplome;
use App\Models\Inscription\type_piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nexmo\Laravel\Facade\Nexmo;
use Session;
class InscriptionControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperer type pieces
        $listes_pieces = DB::table("CHRISTIAN.TYPE_PIECES")->select('*')->get();
        $listes_diplomes = DB::table("CHRISTIAN.TYPE_DIPLOMES")->select('*')->get();
        $listes_cultures = DB::table("CHRISTIAN.TYPE_CULTURES")->select('*')->get();
        $listes_methodes = DB::table("CHRISTIAN.METHODE_CULTURES")->select('*')->get();

        //recuperer type diplomes
        return view('Inscription/inscription')->with('listes_pieces',$listes_pieces)->with('listes_diplomes',$listes_diplomes)->with('listes_cultures',$listes_cultures)->with('listes_methodes',$listes_methodes);

    }

    public function store(Request $request)
    {

        //insertion oracle

        //insertion candidat
        $nom_candidat = $request->input('nom_cand');
        $prenom_candidat = $request->input('prenoms_cand');
        $date_naiss_candidat = $request->input('date');
        $lieu_nais_candidat = $request->input('lieu');
        $nationalite_candidat = $request->input('nationalite');
        $mail_candidat = $request->input('email');
        $contact_candidat = $request->input('contact');
        if($fileCand = $request->file('photo')){
            $nameCand = time().time().'.'.$fileCand->getClientOriginalExtension();
            $target_pathCand =  public_path('/dossiers/candidats/');
            if($fileCand->move($target_pathCand, $nameCand)) {
                $photoCand = $nameCand;
            }
        }


        $donne_cand =array(
            'PHOTO_CANDIDAT'=>$photoCand,
            'NOM_CANDIDAT'=>$nom_candidat,
            'PRENOM_CANDIDAT'=>$prenom_candidat,
            'DATE_NAISS_CANDIDAT'=>$date_naiss_candidat,
            'LIEU_NAIS_CANDIDAT'=>$lieu_nais_candidat,
            'NATIONALITE_CANDIDAT'=>$nationalite_candidat,
            'CONTACT_CANDIDAT'=>$contact_candidat,
            'MAIL_CANDIDAT'=>$mail_candidat);

        $insertCand = DB::table("CHRISTIAN.CANDIDATS")->insert($donne_cand);
        $id_cand = DB::select("SELECT MAX(id_cand) as identifiant_cand FROM CHRISTIAN.CANDIDATS");
        $ident= $id_cand[0]->identifiant_cand ;
        $identifiantCand = (integer)$ident;


        //
        $num_pi = $request->input('num_pieces');
        $pieces = $request->input('pieces');
        if($filePieces = $request->file('img_piece')){
            $namePieces = time().time().'.'.$filePieces->getClientOriginalExtension();
            $target_pathPiece =  public_path('/dossiers/pieces/');
            if($filePieces->move($target_pathPiece, $namePieces)) {
                $photoPieces = $namePieces;
            }
        }
        $donne_piece = array('PIECES'=>$pieces,'ID_CAND'=>$identifiantCand,'NUM_PI'=>$num_pi,'IMG_PI'=>$photoPieces);
        $insertPiece = DB::table("CHRISTIAN.AVOIR_PIECES")->insert($donne_piece);


        //inserer diplome
        $num_dip = $request->input('num_dipl');
        $diplomes = $request->input('diplomes');
        if($fileDiplome = $request->file('img_dipl')){
            $nameDiplome = time().time().'.'.$fileDiplome->getClientOriginalExtension();
            $target_pathDiplome =  public_path('/dossiers/diplomes/');
            if($fileDiplome->move($target_pathDiplome, $nameDiplome)) {
                $photoDiplome = $nameDiplome;
            }
        }

        $donne_diplome = array('DIPLOMES'=>$diplomes,'ID_CAND'=>$identifiantCand,'NUM_DIP'=>$num_dip,'IMG_DIP'=>$photoDiplome);
        $insertDiplome = DB::table("CHRISTIAN.AVOIR_DIPLOMES")->insert($donne_diplome);



        //insertion plantation
        $localisation_plantation = $request->input('lo_plant');
        $superficie_plantation = $request->input('sup_plan');
        if($filePlantation = $request->file('cert_propr')){
            $namePlantation = time().time().'.'.$filePlantation->getClientOriginalExtension();
            $target_pathPlantation =  public_path('/dossiers/plantation/');
            if($filePlantation->move($target_pathPlantation, $namePlantation)) {
                $photoPlantation = $namePlantation;
            }
        }
        $donne_plant = array(
            'LOCALISATION_PLANTATION'=>$localisation_plantation,
            'SUPERFICIE_PLANTATION'=>$superficie_plantation,
            'CERTIFICAT_PROPRIETE'=>$photoPlantation);

        $insertPlant = DB::table("CHRISTIAN.PLANTATION_CANDIDATS")->insert($donne_plant);
        $id_plant = DB::select("SELECT MAX(id_plant) as identifiant_plant FROM CHRISTIAN.PLANTATION_CANDIDATS");
        $identPl= $id_plant[0]->identifiant_plant ;
        $identifiantPlant = (integer)$identPl;


        //insertion employer
        $nombre_employe = $request->input('nbre_empl');
        $nombre_femme = $request->input('nbre_fem');
        $salaire_moyen = $request->input('salaire');
        $mineur = $request->input('mineur');
        if($fileEmploye = $request->file('cert_empl')){
            $nameEmploye = time().time().'.'.$fileEmploye->getClientOriginalExtension();
            $target_pathEmployer =  public_path('/dossiers/employe/');
            if($fileEmploye->move($target_pathEmployer, $nameEmploye)) {
                $photoEmploye = $nameEmploye;
            }
        }
        $donne_empl = array(
            'NOMBRE_EMPLOYE'=>$nombre_employe,
            'NOMBRE_FEMME'=>$nombre_femme,
            'SALAIRE_MOYEN'=>$salaire_moyen,
            'MINEUR'=>$mineur,
            'CERTIFICAT_EMPLOYE'=>$photoEmploye);

        $insertEmpl = DB::table("CHRISTIAN.EMPLOYE_CANDIDATS")->insert($donne_empl);
        $id_empl = DB::select("SELECT MAX(ID_EMPL_CAND) as identifiant_empl FROM CHRISTIAN.EMPLOYE_CANDIDATS");
        $identEmpl= $id_empl[0]->identifiant_empl ;
        $identifiantEmpl = (integer)$identEmpl;



        //insertion avoir culture
        $id_type_cult = $request->input('culture');
        $donne_cult = array('ID_PLANT'=>$identifiantPlant, 'ID_TYPE_CULT'=>$id_type_cult);
        $insertCult = DB::table("CHRISTIAN.AVOIR_CULTURES")->insert($donne_cult);

        //insertion methode
        $id_methode = $request->input('meth_cult');
        $donne_meth = array('ID_PLANT'=>$identifiantPlant, 'ID_METHODE'=>$id_methode);
        $insertMeth = DB::table("CHRISTIAN.AVOIR_METHODES")->insert($donne_meth);

        //insertion dossier
        $identifiant_candidat = $mail_candidat;
        $mot_de_passe = Str::random(6);
        $date_inscription = date("d-m-Y");
        $donne_dossier = array(
            'IDENTIFIANT_CANDIDAT'=>$identifiant_candidat,
            'MOT_DE_PASSE'=>$mot_de_passe,
            'ID_PLANT'=>$identifiantPlant,
            'ID_CAND'=>$identifiantCand,
            'ID_EMPL_CAND'=>$identifiantEmpl,
            'DATE_INSCRIPTION'=>$date_inscription);

        $insertDossier = DB::table("CHRISTIAN.DOSSIER_INSCRIPTIONS")->insert($donne_dossier);


        if ($insertCand && $insertPiece && $insertCult && $insertEmpl && $insertDiplome && $insertPlant && $insertMeth && $insertDossier){
            $dossierid = DB::select("SELECT MAX(DOSSIER) as iddossier FROM DOSSIER_INSCRIPTIONS");
            $docid = $dossierid[0]->iddossier;
            $valueapi = array(
              'dossierid'=>$docid,
                'message'=>1
            );
            $insetApi = DB::table("notificationapi")->insert($valueapi);
            return view('Inscription.finish')->with(['identifiant'=>$identifiant_candidat,'mdp'=>$mot_de_passe]);

        }

    }

    public function connexion(){
        return view('connexion');
    }

    public function connecter(Request $request){
        $identifiant = $request->input('email');
        $mdp = $request->input('pass');
        $result = DB::table("dossier_inscriptions")
            ->join('etats','dossier_inscriptions.validation','=','etats.id_table')
            ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
            ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
            ->join('resultatfinal','resultatfinal.dossier','=','dossier_inscriptions.dossier')
            ->join('candidats','dossier_inscriptions.id_cand','=','candidats.id_cand')
            ->where('identifiant_candidat','=',$identifiant)
            ->where('mot_de_passe','=',$mdp)
            ->select('*')->get();
        if ($result){
            //envoyer le message aussi
            $request->session()->put(['candidat'=>$result]);
            return redirect()->route('candidat.resultat');
        }
        else{
            Session()->flash('success','Identifiant ou Mot de Passe errone.');
            return redirect()->route('login');
        }

    }

    public function logout(){
        session()->flush();
        return redirect()->route('acceuil');
    }




}
