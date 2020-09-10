@extends('layout')


@section('pages')
    <!--Causes candidat-->
    <section class="wf100 p80">
        <div class="container contact-info">
            <div class="row">
                <div class="col-md-12">
                    <h3>INFORMATION PERSONNEL</h3>
                </div>
                <div class="col-md-12">
                    <form action="{{route('inscription.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="c-info">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" class="form-control" required id="photo">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nom">Nom </label>
                                    <input type="text" name="nom_cand" class="form-control" required id="nom">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="prenoms">Prenoms</label>
                                    <input type="text" name="prenoms_cand" class="form-control" required id="prenoms">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="date">Date naissance</label>
                                    <input type="date" name="date" class="form-control" required id="date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lieu">Lieu naissance </label>
                                    <input type="text" name="lieu" class="form-control" required id="lieu">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Nationalite">Nationalite</label>
                                    <input type="text" class="form-control" required name="nationalite" id="nationalite">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Contact">Contact</label>
                                    <input type="text" class="form-control" required name="contact" id="contact">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" required id="email" name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="pieces">Type piece</label>
                                    <select class="form-control" required name="pieces" id="pieces">
                                        @foreach($listes_pieces as $piece)
                                            <option value="{{ $piece->id_piece }}">
                                                {{ $piece ->libelle_piece }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="num_pieces">Numero Piece</label>
                                    <input type="text" name="num_pieces" class="form-control" required id="num_pieces">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img_piece">Image piece</label>
                                    <input type="file" class="form-control" required name="img_piece" id="img_piece">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="diplomes">Type diplome</label>
                                    <select class="form-control" required name="diplomes" id="diplomes">
                                        @foreach($listes_diplomes as $diplome)
                                            <option value="{{ $diplome->id_type_diplomes }}">
                                                {{ $diplome ->libelle_type_diplomes }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="num_dipl">Numero Diplome</label>
                                    <input type="text" name="num_dipl" class="form-control" required id="num_dipl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img_dipl">Image Diplome</label>
                                    <input type="file" class="form-control" name="img_dipl" required id="img_dipl">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="lo_plant">Localisation Plantation</label>
                                    <input type="text" name="lo_plant" class="form-control" required id="lo_plant">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sup_plant">Superficie Plantation</label>
                                    <input type="text" name="sup_plan" class="form-control" required id="sup_plant">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cer_prop">Certificat Propriete</label>
                                    <input type="file" name="cert_propr" class="form-control" required id="cer_prop">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="culture">Culture</label>
                                    <select class="form-control" required name="culture" id="cultures">
                                        @foreach($listes_cultures as $culture)
                                            <option value="{{ $culture->id_type_cultures}}">
                                                {{ $culture->libelle_type_cultures }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="meth_cult">Methode de Culture</label>
                                    <select class="form-control" required name="meth_cult" id="meth_cult">
                                        @foreach($listes_methodes as $methode)
                                            <option value="{{ $methode->id_methodes_cultures }}">
                                                {{ $methode->libelle_methodes_cultures }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nbre_empl">Nombre Employe</label>
                                    <input type="number" name="nbre_empl" class="form-control" required id="nbre_empl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nbre_fem">Nombre Femme</label>
                                    <input type="number" name="nbre_fem" class="form-control" required id="nbre_fem">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="salaire">Salaire minimum des employes</label>
                                    <input type="number" name="salaire" class="form-control" required id="salaire">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="mineur">Employe vous des mineurs</label>
                                    <select class="form-control" required name="mineur" id="mineur">
                                        <option value="2" selected>OUI</option>
                                        <option value="1" >NON</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cert_empl">Certificat employe</label>
                                    <input type="file" name="cert_empl" class="form-control" required id="cert_empl">
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">ENREGISTRER</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>




s
    </section>
    <!--Causes End-->


    <!--Causes End-->
@endsection


@section('js')

@endsection
