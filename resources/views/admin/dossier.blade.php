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
                                    TYPE PIECE : {{$dossier[0]-> libelle_piece}} NUMERO PIECE : {{$dossier[0]-> num_pi }}
                                    <BR>
                                    TYPE DIPLOME : {{$dossier[0]-> libelle_type_diplomes }} NUMERO DIPLOME : {{$dossier[0]-> num_dip}}
                                </p>
                            </div>

                        </div>
                        <br>
                        <div class="card" style="width: 30rem;">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="card-body">
                                <p class="card-text">
                                    LOCALISATION PLANTATION : {{$dossier[0]->localisation_plantation}}
                                    <br>
                                    SUPERFICIE PLANTATION : {{$dossier[0]-> superficie_plantation}}
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
