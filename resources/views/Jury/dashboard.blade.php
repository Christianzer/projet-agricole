@extends('Jury.layout')
@section('pages-jury')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <?php
    $test = session('test')->all();
    $nom = session('nom');
    ?>
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">BIENVENUE {{$nom}}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Liste des candidats a noter</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Rendez Vous</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Rendez Vous</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($test as $res)
                                    <tr>
                                        <td>
                                            @if ($res->etat==1)
                                                <a href="{{route('jury.note',$res->id_visite)}}">{{$res->dossier}}</a>
                                            @else
                                                {{$res->dossier}}
                                            @endif
                                        </td>
                                        <td>{{$res->nom_candidat}}</td>
                                        <td>{{$res->prenom_candidat}}</td>
                                        <td>
                                            <span class="badge badge-success">{{$res->date_rendez_vous}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
