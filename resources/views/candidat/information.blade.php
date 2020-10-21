@extends('candidat.dashbord_dossier')
<?php
$candidat = session('candidat')->all();
?>
@section('js')

@endsection
@section('pages')
    <br>
    <div class="col-xl-12 col-lg-7">

        @if ($candidat[0]->validation == 1)
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <center><h4 class="m-0 font-weight-bold text-info" align="center">
                            BONJOUR MR/MME {{$candidat[0]->nom_candidat}} {{$candidat[0]->prenom_candidat}} VOTRE DOSSIER EST EN COURS DE TRAITEMENT
                        </h4></center>
                </div>
            </div>
        @elseif($candidat[0]->validation == 2)
            @if ($candidat[0]->etat == 1)
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <center><h4 class="m-0 font-weight-bold text-success" align="center">
                                BONJOUR MR/MME {{$candidat[0]->nom_candidat}} {{$candidat[0]->prenom_candidat}} RESULTAT NON DISPONIBLE PATIENTER
                            </h4></center>
                    </div>
                </div>
            @elseif($candidat[0]->etat == 2)
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <center><h4 class="m-0 font-weight-bold text-success" align="center">
                                BONJOUR MR/MME {{$candidat[0]->nom_candidat}} {{$candidat[0]->prenom_candidat}} VOUS ETES LE GRAND VAINQUEUR DU CONCOURS DE {{$candidat[0]->libelle_type_cultures}}
                            </h4></center>
                    </div>
                </div>
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h class="m-0 font-weight-bold text-primary">CARTE DE CERTIFICATION</h>
                            </div>
                            <div class="card-body" align="center">
                                <div class="card" style="width: 40rem;">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <div class="login-box">
                                        <h3>CERTIFICATION {{$candidat[0]->libelle_type_cultures}}</h3>
                                        <div class="card-body">
                                            <div>
                                                <div class="text-left">
                                                    <img src="{{asset('dossiers/candidats/'.$candidat[0]->photo_candidat)}}" class="img-thumbnail mr-4" alt="..." width="250px">
                                                    <img src="{{asset('dossiers/sticker/'.$candidat[0]->sticker)}}" class="img-thumbnail mr-3" alt="..." width="150px" align="right">
                                                </div>
                                            </div>

                                            <br>
                                            <p class="card-text" align="left">
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="MATRICULE" DISABLED >
                                                <input type="text" class="form-control col-8" value="CHLOSAELER{{$candidat[0]->dossier}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="NOM" DISABLED >
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->nom_candidat}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="PRENOMS" DISABLED >
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->prenom_candidat}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="DATE NAISSANCE" DISABLED >
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->date_naiss_candidat}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="CONTACT" DISABLED >
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->contact_candidat}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="MAIL" DISABLED >
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->mail_candidat}}" disabled required>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control col-4 mr-4" value="DATE OBTENTION" DISABLED>
                                                <input type="text" class="form-control col-8" value="{{$candidat[0]->date_resultat}}" disabled required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <center><h4 class="m-0 font-weight-bold text-danger" align="center">
                                BONJOUR MR/MME {{$candidat[0]->nom_candidat}} {{$candidat[0]->prenom_candidat}} VOUS AVEZ ECHOUE AU CONCOURS
                            </h4></center>
                    </div>
                </div>
            @endif

        @elseif($candidat[0]->validation == 3 )
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <center><h4 class="m-0 font-weight-bold text-danger" align="center">
                            BONJOUR MR/MME {{$candidat[0]->nom_candidat}} {{$candidat[0]->prenom_candidat}} VOTRE DOSSIER A ETE REJETER
                        </h4></center>
                </div>
            </div>
        @endif


    </div>
@endsection
