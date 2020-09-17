@extends('layout')

@section('pages')
    <!--Header End-->
    <!--Inner Header Start-->
    <!--section class="wf100 p100 inner-header">
        <div class="container">
            <h1>INSCRIPTION</h1>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Page inscription</a></li>
            </ul>
        </div>
    </section!-->
    <!--Inner Header End-->
    <!--Causes Start-->
    <section class="home2-about wf100 p100 gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="video-img"> <img src="{{asset('assets/images/img_plan.jpg')}}" alt=""> </div>
                </div>
                <div class="col-md-7">
                    <div class="h2-about-txt">
                        <h3>Conditions d'inscription</h3>
                        <p><img src="{{asset('assets/images/coche.png')}}" alt="" width="20" height="20"> Etre de nationalité Ivoirienne </p>
                        <p><img src="{{asset('assets/images/coche.png')}}" alt="" width="20" height="20"> Etre agé d'au moins 25 ans</p>
                        <p><img src="{{asset('assets/images/coche.png')}}" alt="" width="20" height="20"> Avoir une pièce d'identité (CNI, passeport, attestation d'dentité) </p>
                        <p><img src="{{asset('assets/images/coche.png')}}" alt="" width="20" height="20"> Etre propriétaire d'une plantation de café ou de cacao et avoir les documents légals </p>
                        <p><img src="{{asset('assets/images/coche.png')}}" alt="" width="20" height="20"> Avoir les pièces d'identité (CNI, passeport, attestation d'identité) de ses employés </p>

                    </div>
                </div>
            </div>
        </div>

                <div class="container contact-info">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>POUR PLUS D'INFORMATION</h3>
                        </div>
                        <!--Contact Info Start-->
                        <div class="col-md-4">
                            <div class="c-info">
                                <h6>Addresse:</h6>
                                <p> Plateau,Avenue Terrassone de, Fougères </p>
                            </div>
                        </div>
                        <!--Contact Info End-->
                        <!--Contact Info Start-->
                        <div class="col-md-4">
                            <div class="c-info">
                                <h6>Contact:</h6>
                                <p><strong>Phone:</strong> +225 79 58 87 03</p>
                                <p><strong>Fax:</strong> +225 22 48 75 12</p>
                            </div>
                        </div>
                        <!--Contact Info End-->
                        <!--Contact Info Start-->
                        <div class="col-md-4">
                            <div class="c-info">
                                <h6>Mail</h6>
                                <p> concours_cafe-cacao@gouv.ci</p>
                            </div>
                        </div>
                        <!--Contact Info End-->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Causes End-->

@endsection
