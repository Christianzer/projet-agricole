@extends('admin.layout')

@section('pages-admin')
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <center><h4 class="m-0 font-weight-bold text-primary">DOSSIER NUMERO {{$dossier[0]->dossier}}</h4></center>
            </div>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">INFORMATION CANDIDAT</h6>
                    </div>
                    <div class="card-body">

                        <div class="card" style="width: 40rem;">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <div>
                                    <div class="text-right">
                                        <img src="{{asset('dossiers/candidats/'.$dossier[0]->photo_candidat)}}" class="img-thumbnail mr-4" alt="..." width="150px">
                                    </div>
                                </div>
                                <br>
                                <p class="card-text">
                                    NOM : {{$dossier[0]->nom_candidat}}
                                    <br>
                                    PRENOMS : {{$dossier[0]-> prenom_candidat}}
                                    <br>
                                    DATE NAISSANCE : {{$dossier[0]-> date_naiss_candidat}}
                                    <br>
                                    LIEU NAISSANCE : {{$dossier[0]-> lieu_nais_candidat}}
                                    <br>
                                    NATIONALITE : {{$dossier[0]-> nationalite_candidat}}
                                    <br>
                                    CONTACT : {{$dossier[0]-> contact_candidat}}
                                    <br>
                                    MAIL : {{$dossier[0]-> mail_candidat}}
                                    <br>
                                    TYPE PIECE : {{$dossier[0]-> libelle_piece}}
                                    <BR>
                                    NUMERO PIECE : {{$dossier[0]-> num_pi }}
                                    <br>
                                    IMAGE DE LA PIECE : <a href="{{asset('dossiers/pieces/'.$dossier[0]->certificat_propriete)}}">CLIQUEZ ICI POUR VOIR L'IMAGE DE LA PIECE</a>
                                    <br>
                                    TYPE DIPLOME : {{$dossier[0]-> libelle_type_diplomes }}
                                    <br>
                                    NUMERO DIPLOME : {{$dossier[0]-> num_dip}}
                                    <br>
                                    IMAGE DU DIPLOME : <a href="{{asset('dossiers/diplomes/'.$dossier[0]->certificat_propriete)}}">CLIQUEZ ICI POUR VOIR L'IMAGE DU DIPLOME</a>
                                    <br>
                                    LOCALISATION PLANTATION : {{$dossier[0]->localisation_plantation}}
                                    <br>
                                    SUPERFICIE PLANTATION : {{$dossier[0]-> superficie_plantation}}
                                    <br>
                                    TYPE DE CULTURE PRATIQUE : {{$dossier[0]->libelle_type_cultures}}
                                    <br>
                                    METHODE DE CULTURE : {{$dossier[0]->libelle_methodes_cultures}}
                                    <BR>
                                    CERTIFICAT PLANTATION : <a href="{{asset('dossiers/plantation/'.$dossier[0]->certificat_propriete)}}">CLIQUEZ ICI POUR VOIR LE CERTIFICAT</a>
                                    <br>
                                    NOMBRE EMPLOYE : {{$dossier[0]->nombre_employe}}
                                    <br>
                                    NOMBRE DE FEMMES : {{$dossier[0]->nombre_femme}}
                                    <br>
                                    EMPLOYE VOUS DES MINEURS:
                                    @if ($dossier[0]->mineur == 2)
                                        OUI
                                    @else
                                        NON
                                    @endif
                                    <BR>
                                    SALAIRE MOYEN : {{$dossier[0]->salaire_moyen}}
                                    <BR>
                                    CERTIFIACT DES EMPLOYES : <a href="{{asset('dossiers/employe/'.$dossier[0]->certificat_employe)}}">CLIQUEZ ICI POUR VOIR LE CERTIFICAT</a>
                                    <BR>
                                </p>
                            </div>

                        </div>
                        <!--

                         -->


                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('dossier.etat')}}" method="post">
            <input type="hidden" name="codeDossier" value="{{$dossier[0]->dossier}}">
            @csrf
            <div align="center">
                <button  class="btn btn-primary" type="submit" name="etat" value="2">Valider</button>
                <button  class="btn btn-danger" type="submit" name="etat" value="3">Rejeter</button>
            </div>
        </form>
    </div>
@endsection
