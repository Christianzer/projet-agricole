@extends('layout')


@section('pages')
    <!--Causes candidat-->
    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h3>INFORMATION PERSONNEL</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" class="form-control" id="photo">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nom">Nom </label>
                                    <input type="text" name="nom_cand" class="form-control" id="nom">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="prenoms">Prenoms</label>
                                    <input type="text" name="prenoms_cand" class="form-control" id="prenoms">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="date">Date naissance</label>
                                    <input type="date" name="date" class="form-control" id="date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lieu">Lieu naissance </label>
                                    <input type="text" name="lieu" class="form-control" id="lieu">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Nationalite">Nationalite</label>
                                    <input type="text" class="form-control" name="nationalite" id="nationalite">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Contact">Contact</label>
                                    <input type="text" class="form-control" name="contact" id="contact">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="pieces">Type piece</label>
                                    <select class="form-control" name="pieces" id="pieces">
                                        @foreach($listes_pieces as $piece)
                                            <option value="{{ $piece->id_piece }}">
                                                {{ $piece ->libelle_piece }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="num_pieces">Numero Piece</label>
                                    <input type="text" name="num_pieces" class="form-control" id="num_pieces">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img_piece">Image piece</label>
                                    <input type="file" class="form-control" name="img_piece" id="img_piece">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="diplomes">Type diplome</label>
                                    <select class="form-control" name="diplomes" id="diplomes">
                                        @foreach($listes_diplomes as $diplome)
                                            <option value="{{ $diplome->id_type_diplomes }}">
                                                {{ $diplome ->libelle_type_diplomes }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="num_dipl">Numero Diplome</label>
                                    <input type="text" name="num_dipl" class="form-control" id="num_dipl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img_dipl">Image Diplome</label>
                                    <input type="file" class="form-control" id="img_dipl">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Causes End-->


    <!--Causes plantation-->
    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h3>INFORMATION SUR PLANTATION</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="lo_plant">Localisation Plantation</label>
                                    <input type="text" name="lo_plant" class="form-control" id="lo_plant">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sup_plant">Superficie Plantation</label>
                                    <input type="text" name="sup_plan" class="form-control" id="sup_plant">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cer_prop">Certificat Propriete</label>
                                    <input type="file" name="cert_propr" class="form-control" id="cer_prop">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="culture">Culture</label>
                                    <select class="form-control" name="culture" id="cultures">
                                        @foreach($listes_pieces as $piece)
                                            <option value="{{ $piece->id_piece }}">
                                                {{ $piece ->libelle_piece }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="meth_cult">Methode de Culture</label>
                                    <select class="form-control" name="meth_cult" id="meth_cult">
                                        @foreach($listes_pieces as $piece)
                                            <option value="{{ $piece->id_piece }}">
                                                {{ $piece ->libelle_piece }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Causes End-->


    <!--Causes Employe-->
    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h3>INFORMATION SUR LES EMPLOYES</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nbre_empl">Nombre Employe</label>
                                    <input type="number" name="nbre_empl" class="form-control" id="nbre_empl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nbre_fem">Nombre Femme</label>
                                    <input type="number" name="nbre_fem" class="form-control" id="nbre_fem">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="salaire">Salaire minimum des employes</label>
                                    <input type="number" name="salaire" class="form-control" id="salaire">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="mineur">Employe vous des mineurs</label>
                                    <select class="form-control" name="mineur" id="mineur">
                                        <option value="2" selected>OUI</option>
                                        <option value="1" >NON</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cert_empl">Certificat employe</label>
                                    <input type="file" name="cert_empl" class="form-control" id="cert_empl">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Causes End-->
@endsection


@section('js')

@endsection
