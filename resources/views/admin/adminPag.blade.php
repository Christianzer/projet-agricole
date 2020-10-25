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
            <h1 class="h3 mb-0 text-gray-800">PRISE DE RENDEZ VOUS</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Mise en place du rendez-vous</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('rendez.part')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-2 mr-5">
                                    <label>Numero Dossier</label>
                                    <input type="text" name="numDo" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Date Rendez Vous</label>
                                    <input type="date" name="dateRendez" class="form-control" required>
                                </div>
                            </div>
                            <div align="right">
                                <button  class="btn btn-primary" type="submit" >Valider</button>
                            </div>
                        </form>
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
                        <h6 class="m-0 font-weight-bold text-primary">Liste des candidats admis n'ayant pas de rendez vous</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Type Culture</th>
                                    <th>Date Rendez Vous</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Type Culture</th>
                                    <th>Date Rendez Vous</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($resultAdmis as $res)
                                    <tr>
                                        <td>{{$res->dossier}}</td>
                                        <td>{{$res->nom_candidat}}</td>
                                        <td>{{$res->prenom_candidat}}</td>
                                        <td>{{$res->libelle_type_cultures}}</td>
                                        <td>
                                            @if ($res->date_rendez_vous == null)
                                                <span class="badge badge-danger">AUCUN RENDEZ VOUS PROGRAMMER</span>
                                            @else
                                                <span class="badge badge-success">{{$res->date_rendez_vous}}</span>
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
