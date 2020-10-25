@extends('admin.layout')

@section('pages-admin')

    <!-- Begin Page Content -->
    <div class="container-fluid">


            <!-- mettre ici -->
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
        </div>



        <!-- Content Row -->
        <div class="row">


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">NOMBRES DE PARTICIPANT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nbre}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NOMBRES DE PARTICIPANT EN ATTENTE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nbreAttente}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRES DE PARTICIPANT ADMIS</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nbreAdmin}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">NOMBRES DE PARTICIPANT REFUSER</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nbreEchec}}</div>
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
                            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Inscription</th>
                                    <th>Type Culture</th>
                                    <th>Etat Dossier</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Type Culture</th>
                                    <th>Date Inscription</th>
                                    <th>Etat Dossier</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($cand as $res)
                                    <tr>
                                        <td>
                                            @if ($res->validation==1)
                                                <a href="{{route('dossier.perso',$res->dossier)}}">{{$res->dossier}}</a>
                                            @else
                                                {{$res->dossier}}
                                            @endif
                                        </td>
                                        <td>{{$res->nom_candidat}}</td>
                                        <td>{{$res->prenom_candidat}}</td>
                                        <td>{{$res->date_inscription}}</td>
                                        <td>{{$res->libelle_type_cultures}}</td>
                                        <td>
                                            @if ($res->validation == 1)
                                                <span class="badge badge-primary">{{$res->libelle_etat}}</span>
                                            @elseif($res->validation == 2)
                                                <span class="badge badge-success">{{$res->libelle_etat}}</span>
                                            @else
                                                <span class="badge badge-danger">{{$res->libelle_etat}}</span>
                                            @endif

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
