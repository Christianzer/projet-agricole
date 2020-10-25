@extends('Jury.layout')
@section('pages-jury')
    <!-- Begin Page Content -->

    <div class="container-fluid">




    <?php
    $nom = session('nom');
    $jury = session('identifiant');
    use Illuminate\Support\Facades\DB;
    $dossierOk = DB::table('visite')
        ->where('identifiant_jury','=',$jury)
        ->join('dossierpris','dossierpris.dossier','=','visite.dossier')
        ->join('dossier_inscriptions','dossier_inscriptions.dossier','=','visite.dossier')
        ->join('avoir_cultures','avoir_cultures.id_plant','=','dossier_inscriptions.id_plant')
        ->join('type_cultures','type_cultures.id_type_cultures','=','avoir_cultures.id_type_cult')
        ->join('candidats','candidats.id_cand','=','dossier_inscriptions.id_cand')
        ->get();
    ?>

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
                        <h3>CETTE PAGE CONSISTE A NOTER LES CANDIDATS</h3>
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
                                    <th>Type Culture</th>
                                    <th>Date Rendez Vous</th>
                                    <th>Moyenne</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Dossier</th>
                                    <th>Type Culture</th>
                                    <th>Date Rendez Vous</th>
                                    <th>Moyenne</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($dossierOk as $res)
                                    <tr>
                                        <td>
                                            @if ($res->etat==1)
                                                <a href="{{route('jury.note',$res->id_visite)}}">{{$res->dossier}}</a>
                                            @else
                                                {{$res->dossier}}
                                            @endif
                                        </td>
                                        <td>{{$res->libelle_type_cultures}}</td>
                                        <td>
                                            {{$res->date_rendez_vous}}
                                        </td>
                                        <td>
                                            @if ($res->etat==1)
                                                <span class="badge badge-danger">PAS ENCORE NOTE</span>
                                            @else
                                                <span class="badge badge-success">{{$res->moyenne_obtenue}}</span>
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
