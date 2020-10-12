@extends('admin.layout')

@section('pages-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

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
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-2 mr-5">
                                    <label>Numero Dossier</label>
                                    <input type="text" name="numDo" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Date RenDez Vous</label>
                                    <input type="date" name="dateRendez" class="form-control">
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
                        <h6 class="m-0 font-weight-bold text-primary">Liste des participants admis</h6>
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
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Date Inscription</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($resultAdmis as $res)
                                    <tr>
                                        <td><a href="{{route('dossier.perso',$res->dossier)}}">{{$res->dossier}}</a></td>
                                        <td>{{$res->nom_candidat}}</td>
                                        <td>{{$res->prenom_candidat}}</td>
                                        <td>{{$res->date_inscription}}</td>
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
