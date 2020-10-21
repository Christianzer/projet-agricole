@extends('Jury.layout')
<?php
$jury = session('identifiant');

?>
@section('pages-jury')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <center><h5 class="m-0 font-weight-bold text-primary">  FICHE D'EVALUATION DE LA PARCELLE DOSSIER {{$doc[0]->dossier}} CONCERNANT LA CULTURE DU {{$doc[0]->libelle_type_cultures}}  </h5></center>
            </div>
        </div>
        <form action="{{route('jury.controle')}}" method="post">
            @csrf
            <input type="hidden" name="jury" value="{{$jury}}">
            <input type="hidden" name="visite" value="{{$doc[0]->id_visite}}">
            <input type="hidden" name="culture" value="{{$doc[0]->id_type_cult}}">
            <input type="hidden" name="document" value="{{$doc[0]->dossier}}">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center><h5 class="m-0 font-weight-bold text-primary">BEAUTE DE LA PLANTATION</h5></center>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5 mr-3">
                            <label for="type_ins">
                                @if ($doc[0]->id_type_cult == 1)
                                    Feuillage
                                @elseif($doc[0]->id_type_cult == 2)
                                    Etat des arbres
                                @endif
                            </label>
                            <input type="number" step="any" required name="etat" class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="ndemande">Espacement entre les arbres</label>
                            <input type="number" step="any" required name="espace" class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label> Propreté</label>
                            <input type="number" step="any" required name="proprete" class="form-control" min="0" max="20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center><h5 class="m-0 font-weight-bold text-primary">
                            @if ($doc[0]->id_type_cult == 1)
                                QUALITE DU CAFE
                            @elseif($doc[0]->id_type_cult == 2)
                                QUALITE DU CACAO
                            @endif
                        </h5></center>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5 mr-3">
                            <label>
                                @if ($doc[0]->id_type_cult == 1)
                                    Beauté des grains
                                @elseif($doc[0]->id_type_cult == 2)
                                    Beauté de la cabosse
                                @endif

                            </label>
                            <input type="number" step="any" required name="beaute" class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="ndemande">Fruit sain</label>
                            <input type="number" step="any" required name="sain" class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label>Goût</label>
                            <input type="number" step="any" required name="gout" class="form-control" min="0" max="20">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center><h5 class="m-0 font-weight-bold text-primary">QUALITE DU SOL</h5></center>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5 mr-3">
                            <label for="ufr">Humidité</label>
                            <input type="number" step="any" name="humidite" required class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="uf">Qualité de l'engrais utilisé</label>
                            <input type="number" step="any" name="engrais" required class="form-control" min="0" max="20">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="uf">protection du sol</label>
                            <input type="number" step="any" name="protection" required class="form-control" min="0" max="20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center><h5 class="m-0 font-weight-bold text-primary">PRODUCTION</h5></center>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5 mr-3">
                            <label for="ufr">Quantité produite(moyenne)</label>
                            <input type="number" step="any" name="production" required class="form-control" min="0" max="20">
                        </div>
                        @if ($doc[0]->id_type_cult == 1)
                            <div class="form-group col-md-5 mr-3">
                                <label for="uf">Séchage du café</label>
                                <input type="number" step="any" name="sechage" class="form-control" min="0" max="20">
                            </div>
                            <input type="hidden"  name="fermentation" required class="form-control" value="0">
                        @elseif($doc[0]->id_type_cult == 2)
                            <div class="form-group col-md-5 mr-3">
                                <label for="uf">Fermentation de la ferve de cacao</label>
                                <input type="number" step="any" name="fermentation" required class="form-control" min="0" max="20">
                            </div>
                            <div class="form-group col-md-5 mr-3">
                                <label for="uf">Séchage de la ferve de cacao</label>
                                <input type="number" step="any" name="sechage" required class="form-control" min="0" max="20">
                            </div>
                        @endif
                        <div class="form-group col-md-5 mr-3">
                            <label for="uf">Conservation</label>
                            <input type="number" step="any" name="conservation" required class="form-control" min="0" max="20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center><h5 class="m-0 font-weight-bold text-primary">APPRECIATION DU JURY</h5></center>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5 mr-3">
                            <label for="ufr">Bonus</label>
                            <input type="number" step="any" name="bonus" value="0" class="form-control" min="0" max="5">
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="ufr">Appreciation</label>
                            <select name="appreciation" id="apr" class="form-control">
                                <option value="mediocre">Mediocre</option>
                                <option value="insuffisant">Insuffisant</option>
                                <option value="passable">Passable</option>
                                <option value="bien">Bien</option>
                                <option value="excellent">Excellent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 mr-3">
                            <label for="uf">Commentaire</label>
                            <textarea class="form-control" rows="3" name="comment"> </textarea>
                        </div>

                    </div>

                </div>
            </div>

            <br>

            <div align="center">
                <button type="submit" name="submit" class="btn btn-success btn-lg">VALIDER</button>
            </div>


        </form>


    </div>

    <br>
    <!-- /.container-fluid -->
@endsection
