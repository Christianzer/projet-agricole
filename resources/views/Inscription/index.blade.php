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
                                <h6>Address:</h6>
                                <p> 4700 Millenia Blvd # 175, Orlando, FL 32839, USA </p>
                            </div>
                        </div>
                        <!--Contact Info End-->
                        <!--Contact Info Start-->
                        <div class="col-md-4">
                            <div class="c-info">
                                <h6>Contact:</h6>
                                <p><strong>Phone:</strong> +1 321 2345 678-9</p>
                                <p><strong>Fax:</strong> +1 321 2345 876-7</p>
                            </div>
                        </div>
                        <!--Contact Info End-->
                        <!--Contact Info Start-->
                        <div class="col-md-4">
                            <div class="c-info">
                                <h6>For More Information:</h6>
                                <p><strong>Email:</strong> info@ecova.com</p>
                                <p>contact@ecova.com</p>
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
