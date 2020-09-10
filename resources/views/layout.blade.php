<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <title>ECO HTML</title>
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
            <a class="navbar-brand" href="{{route('acceuil')}}"><img src="{{asset('assets/images/h2logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="{{route('acceuil')}}" >ACCUEIL</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('candidat')}}">A PROPOS</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('inscription.index')}}">INSCRIPTION</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('login')}}">CONNEXION</a> </li>
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                            <h4>Plus d'information</h4>
                            <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green businesses helping people save energy, water, and other resources. Definitely, you can go with this business as it is a nothing but the future. </p>
                            <a href="#" class="lm">About us</a>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                            <h4>Methodes</h4>
                            <ul class="quick-links">
                                <li><a href="#">Solar Energy</a></li>
                                <li><a href="#">Waste Management</a></li>
                                <li><a href="#">Eco Ideas</a></li>
                                <li><a href="#">Recycling Materials</a></li>
                                <li><a href="#">Plant Ecology</a></li>
                                <li><a href="#">Saving Wildlife </a></li>
                            </ul>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                            <h4>Ancien Evenement</h4>
                            <ul class="lastest-products">
                                <li> <img src="{{asset('assets/images/flp1.jpg')}}" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                                <li> <img src="{{asset('assets/images/flp2.jpg')}}" alt=""> <strong><a href="#">Eliminate your plastic bottle pollution &amp; keep...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                                <li> <img src="{{asset('assets/images/flp3.jpg')}}" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                            </ul>
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
                                                    <div class="fp-text">
                                                        <h6><a href="#">Stop au travail des enfants dans les plantations</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 262.5px;">
                                            <div class="item">
                                                <div class="f-product">
                                                    <img src="{{asset('assets/images/img_enfant2.jpg')}}" alt="">
                                                    <div class="fp-text">
                                                        <h6><a href="#">Stop au travail des enfants dans les plantations</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 262.5px;">
                                            <div class="item">
                                                <div class="f-product">
                                                    <img src="{{asset('assets/images/img_enfant.jpg')}}" alt="">
                                                    <div class="fp-text">
                                                        <h6><a href="#">Stop au travail des enfants dans les plantations</a></h6>
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
                    <div class="col-md-4 col-sm-4"> <img src="{{asset('assets/images/logo.png')}}" alt=""> </div>
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
