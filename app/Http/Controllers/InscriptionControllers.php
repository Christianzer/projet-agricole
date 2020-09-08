<?php

namespace App\Http\Controllers;

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

class InscriptionControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //recuperer type pieces
        $listes_pieces = type_piece::all();
        $listes_diplomes = type_diplome::all();
        $listes_cultures = type_culture::all();
        $listes_methodes = methode_culture::all();



        //recuperer type diplomes
        return view('Inscription/inscription')->with('listes_pieces',$listes_pieces)->with('listes_diplomes',$listes_diplomes)->with('listes_cultures',$listes_cultures)->with('listes_methodes',$listes_methodes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //insertion plantation
        $plant_candidat = new Plantation();
        $plant_candidat->localisation_plantation = $request->input('lo_plant');
        $plant_candidat->superficie_plantation = $request->input('sup_plan');
        if ($request->hasFile('cer_prop')){
            $filepro = $request->file('cer_prop');
            $extensionpro = $filepro->getClientOriginalExtension();
            $filenamepro = time().'.'.$extensionpro;
            $filepro->move('dossier/fichier',$filenamepro);
            $plant_candidat->certificat_propriete = $filepro;
        }else{
            $plant_candidat->certificat_propriete = '';
        }

        $plant_candidat->save();



        //insertion candidat
        $candidat = new candidat();


        $candidat->nom_candidat = $request->input('nom_cand');
        $candidat->prenom_candidat = $request->input('prenoms_cand');
        $candidat->date_naiss_candidat = $request->input('date');
        $candidat->lieu_nais_candidat = $request->input('lieu');
        $candidat->nationalite_candidat = $request->input('nationalite');
        $candidat->mail_candidat = $request->input('email');
        $candidat->contact_candidat = $request->input('contact');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('dossier/fichier',$filename);
            $candidat->photo_candidat = $filename;
        }else{
            $candidat->photo_candidat = '';
        }
        $candidat->save();



        //insertion employer
        $employe = new employe_candidat();
        $employe->nombre_employe = $request->input('nbre_empl');
        $employe->nombre_femme = $request->input('nbre_fem');
        $employe->salaire_moyen = $request->input('salaire');
        $employe->mineur = $request->input('mineur');
        if ($request->hasFile('cert_empl')){
            $fileemp = $request->file('cert_empl');
            $extensionemp = $fileemp->getClientOriginalExtension();
            $filenaemp = time().'.'.$extensionemp;
            $fileemp->move('dossier/fichier',$filenaemp);
            $employe->certificat_employe = $fileemp;
        }else{
            $employe->certificat_employe = '';
        }
        $employe->save();


        //inserer piece
        $piece = new AvoirPiece();
        $piece->num_pi = $request->input('num_pieces');
        $piece->pieces = $request->input('pieces');
        $piece->id_cand = $candidat->id;
        if ($request->hasFile('img_piece')){
            $filepiece = $request->file('img_piece');
            $extensionpiece = $filepiece->getClientOriginalExtension();
            $filenamepiece = time().'.'.$extensionpiece;
            $filepiece->move('dossier/fichier',$filenamepiece);
            $piece->img_pi = $filepiece;
        }else{
            $piece->img_pi = '';
        }
        $piece->save();

        //inserer diplome
        $diplome = new AvoirDiplome();
        $diplome->num_dip = $request->input('num_dipl');
        $diplome->diplomes = $request->input('diplomes');
        $diplome->id_cand = $candidat->id;

        if ($request->hasFile('img_dipl')){
            $filedipl = $request->file('img_dipl');
            $extensiondipl = $filedipl->getClientOriginalExtension();
            $filenamedipl = time().'.'.$extensiondipl;
            $filedipl->move('dossier/fichier',$filenamedipl);
            $diplome->img_dip = $filedipl;
        }else{
            $diplome->img_dip = '';
        }
        $diplome->save();

        //insertion avoir culture
        $culture = new AvoirCulture();
        $culture->id_plant = $plant_candidat->id;
        $culture->id_type_cult = $request->input('culture');
        $culture->save();

        //insertion methode
        $methode = new AvoirMethode();
        $methode->id_plant = $plant_candidat->id;
        $methode->id_methode = $request->input('meth_cult');
        $methode->save();

        //insertion dossier
        $dossier = new DossierInscription();
        $dossier->identifiant_candidat = 'ok';
        $dossier->mot_de_passe = bcrypt('ok1234');
        $dossier->id_cand = $candidat->id;
        $dossier->id_plant = $plant_candidat->id;
        $dossier->id_empl_cand = $employe->id;
        $dossier->date_inscription = date('y-d-m');
        $dossier->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
