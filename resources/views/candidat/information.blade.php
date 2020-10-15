@extends('candidat.dashbord_dossier')

@section('pages')
    <br>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <center><h4 class="m-0 font-weight-bold text-primary" align="center">
                        BONJOUR MR/MME ?? VOUS ETES LE GRAND VAINQUEUR DU CONCOURS DE ??
                    </h4></center>
            </div>
        </div>

        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h class="m-0 font-weight-bold text-primary">CARTE DE CERTIFICATION</h>
                    </div>
                    <div class="card-body" align="center">
                        <div class="card" style="width: 40rem;">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <div class="login-box">
                                <h3>CERTIFICATION ??</h3>
                                <div class="card-body">
                                    <div>
                                        <div class="text-left">
                                            <img src="{{asset('dossiers/candidats/16001907551600190755.jpg')}}" class="img-thumbnail mr-4" alt="..." width="250px">
                                            <img src="{{asset('dossiers/candidats/16001907551600190755.jpg')}}" class="img-thumbnail mr-3" alt="..." width="150px" align="right">
                                        </div>
                                    </div>

                                    <br>
                                    <p class="card-text" align="left">
                                    <div class="input-group">
                                        <input type="text" class="form-control col-4 mr-4" value="MATRICULE" DISABLED >
                                        <input type="text" class="form-control col-8"  placeholder="Username/Email">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control col-4 mr-4" value="NOM" DISABLED >
                                        <input type="text" class="form-control col-8"  placeholder="Username/Email">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control col-4 mr-4" value="PRENOMS" DISABLED >
                                        <input type="text" class="form-control col-8"  placeholder="Username/Email">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control col-4 mr-4" value="DATE OBTENTION" DISABLED>
                                        <input type="text" class="form-control col-8"  placeholder="Username/Email">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
