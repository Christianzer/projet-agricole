@extends('admin.layout')

@section('pages-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRES DE PARTICIPANT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nbre}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
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
                        <h6 class="m-0 font-weight-bold text-primary">Liste des participants</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Inscription</th>
                                    <th>Etat Dossier</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Inscription</th>
                                    <th>Etat Dossier</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($cand as $res)
                                    @if ($res->validation == 1)
                                        <tr>
                                            <td>{{$res->dossier}}</td>
                                            <td>{{$res->nom_candidat}}</td>
                                            <td>{{$res->prenom_candidat}}</td>
                                            <td>{{$res->date_inscription}}</td>
                                            <td>
                                                <span class="badge badge-primary">{{$res->libelle_etat}}</span>
                                            </td>
                                        </tr>
                                    @endif
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
