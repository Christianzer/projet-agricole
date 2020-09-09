@extends('layout')

@section('pages')
    <!--Slider Start-->
    <!--Slider Start-->
    <section id="home-slider" class="owl-carousel owl-theme wf100">
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>Côte d'Ivoire</strong>
                    <h1>Meilleur agriculteur café-cacao</h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide1.jpg')}}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>2020-2021</strong>
                    <h1>Lancement du concours</h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide2.jpg')}}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>Café-Cacao</strong>
                    <h1>1ère Edition nationale</h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide3.jpg')}}" alt="">
        </div>
    </section>
    <!--Slider End-->
    <!--Slider End-->
    <!--Service Area Start-->
    <!--Service Area Start-->
    <section class="donation-join wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="donation-wrap">
                        <h2>Valoriser le metier d'agriculteur en Côte d'Ivoire</h2>
                        <img src="{{asset('assets/images/img_cacao1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="volbox">
                        <h5></h5>
                        <p>Premier produit d’exportation et principale source de devises, le cacao fait vivre environ 6 millions d’Ivoiriens, soit plus d’un tiers de la population. Il représente 40% de la production mondiale.
                            Le cacao se trouve ainsi au centre d’une agriculture exportatrice qui constitue la clé de voûte de l’économie nationale depuis l’indépendance en 1960.
                            La Côte-d’Ivoire est le troisième exportateur mondial de café après le Brésil et la Colombie. Cette brillante position n’a pas été acquise sans effort, et bien des pays, mieux équipés ou plus peuplés, envient cette troisième place.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="volbox nob">
                        <img src="{{asset('assets/images/img_cafe.jpg')}}" alt="">
                        <p>Le but de ce concours c'est de valoriser l'agriculture café-cacao en Côte d'Ivoire, tout en insistant sur les bonnes méthodes d'agriculture pour avoir du cacao et du café de bonne qualité leader sur le marché international.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Area End-->
    <!--Service Area End-->
    <!--About Section Start-->
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
        <div class="home-facts counter pt80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">89000</p>
                            <p class="ctxt">Trees Planted</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">79000</p>
                            <p class="ctxt">Solar Panels in 2017</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">69000</p>
                            <p class="ctxt">Wildlife Saved</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">59000</p>
                            <p class="ctxt">Served Water Gallons</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section End-->
    <!--Urgent Causes Start-->

    <!--Urgent Causes End-->
    <!--Current Projects Start-->

    <!--Current Projects End-->
    <!--News & Articles Start-->

    <!--News & Articles End-->
    <!--Why Ecova + Facts Start-->

    <!--Why Ecova + Facts End-->
    <!--Online Products Start-->

    <!--Online Products End-->

    <!--InstaGram Start-->
    <div class="instagram">
        <ul>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta1.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta2.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta3.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta4.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta5.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta6.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta7.jpg')}}" alt=""> </li>
        </ul>
    </div>
    <!--InstaGram End-->
@endsection

