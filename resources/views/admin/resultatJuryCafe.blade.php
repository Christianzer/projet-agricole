<?php
$n=0;
?>
@extends('admin.layout')
@section('pages-admin')
    <!-- Page Heading -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">MISE EN PLACE RECOMPENSE CAFE</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">DELIBERATION</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.recompense')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3 mr-5">
                                    <label>Numero du Dossier Vainqueur</label>
                                    <input type="text" name="numDo" class="form-control" required>
                                    <input type="hidden" name="type" value="1">
                                </div>
                                <div class="form-group col-md-6 mr-5">
                                    <label>Sticker</label>
                                    <input type="file" name="sticker" class="form-control" required>
                                </div>
                                <!-- gerer la bas mettre les if -->
                                <div align="right" class="mt-4">
                                    <button  class="btn btn-primary btn-lg" type="submit" >Valider</button>
                                </div>

                            </div>
                            <?php

                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des candidats</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Dossier</th>
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Moyenne Generale</th>
                            <th>Classement</th>
                            <th>Resultat</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Dossier</th>
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Moyenne Generale</th>
                            <th>Classement</th>
                            <th>Resultat</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        foreach($resFin as $fin){
                        $n++;
                        ?>
                        <tr>
                            <td>{{$fin->dossier}}</td>
                            <td>{{$fin->nom_candidat}}</td>
                            <td>{{$fin->prenom_candidat}}</td>
                            <td>{{$fin->moyennefinal}}</td>
                            <td>{{$n}}</td>
                            <td>
                                @if ($fin->etat == 1)
                                    <span class="badge badge-primary">RESULTAT NON DISPONIBLE</span>
                                @elseif($fin->etat == 2)
                                    <span class="badge badge-success">SUCCES</span>
                                @else
                                    <span class="badge badge-danger">ECHEC</span>
                                @endif
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
