<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <title>CACC</title>
    <!-- CSS FILES START -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color.css')}}css/color.css" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="wrapper home2">
    <!--Header Start-->
    <header class="header-style-2">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('acceuil')}}"><img src="{{asset('assets/images/favicon.png')}}" alt="" height="50" width="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="{{route('acceuil')}}" >ACCUEIL</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('candidat')}}">A PROPOS</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('inscription.index')}}">INSCRIPTION</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('login')}}">RESULTAT</a>
                    <!--
                        </li>
                     -->



                </ul>
            </div>

        </nav>
    </header>
    <div id="search">
        <button type="button" class="close">×</button>
        <form class="search-overlay-form">
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!--Header End-->

    @yield('pages')

    <footer class="footer">
        <div class="footer-top wf100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>POUR PLUS D'INFORMATION</h3>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->

                        <div class="c-info">
                            <h6>Addresse:</h6>
                            <p>Plateau,Avenue Terrassone de, Fougères </p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="c-info">
                            <h6>Contact</h6>
                            <p><strong>Phone:</strong> +225 79 58 87 03</p>
                            <p><strong>Fax:</strong> +225 22 48 75 12</p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="c-info">
                            <h6>Mail</h6>
                            <p> concours_cafe-cacao@gouv.ci</p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                            <div id="fpro-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-525px, 0px, 0px); transition: all 0.25s ease 0s; width: 1838px;">
                                        <div class="owl-item cloned" style="width: 262.5px;">
                                            <div class="item">
                                                <div class="f-product">
                                                    <img src="{{asset('assets/images/img_enfant1.jpg')}}" alt="">
                                                    <div class="fp-text" style="color: red">
                                                        <h6><a href="#"><font color="red">Stop au travail des enfants dans les plantations</font></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 262.5px;">
                                            <div class="item">
                                                <div class="f-product">
                                                    <img src="{{asset('assets/images/img_enfant2.jpg')}}" alt="">
                                                    <div class="fp-text" style="color: red">
                                                        <h6><a href="#"><font color="red">Stop au travail des enfants dans les plantations</font></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 262.5px;">
                                            <div class="item">
                                                <div class="f-product">
                                                    <img src="{{asset('assets/images/img_enfant.jpg')}}" alt="">
                                                    <div class="fp-text">
                                                        <h6><a href="#"><font color="red">Stop au travail des enfants dans les plantations</font></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyr wf100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4"> <img src="{{asset('assets/images/favicon.png')}}" alt=""> </div>
                    <div class="col-md-8 col-sm-8">
                        <p>MIAGE Master1 2019-2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--   JS Files Start  -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-1.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
@yield('js')
<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>
