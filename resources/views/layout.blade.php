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
            <div class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('acceuil')}}"> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('candidat')}}"> A propos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('contact')}}"> contactez nous</a>
                    </li>
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

    <!--Footer Start-->
    <footer class="footer">
        <div class="footer-top wf100">
            <div class="container">
                <div class="container contact-info">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>POUR PLUS D'INFORMATION</h3>
                        </div>
                        <!--Contact Info End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="c-info">
                            <h6>Address:</h6>
                            <p> 4700 Millenia Blvd # 175, Orlando, FL 32839, USA </p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="c-info">
                            <h6>Contact:</h6>
                            <p><strong>Phone:</strong> +1 321 2345 678-9</p>
                            <p><strong>Fax:</strong> +1 321 2345 876-7</p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="c-info">
                            <h6>For More Information:</h6>
                            <p><strong>Email:</strong> info@ecova.com</p>
                            <p>contact@ecova.com</p>
                        </div>
                        <!--Footer Widget End-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                            <div id="fpro-slider" class="owl-carousel owl-theme">
                                <!--Footer Product Start-->
                                <div class="item">
                                    <div class="f-product">
                                        <img src="{{asset('assets/images/img_enfant.jpg')}}" alt="">
                                        <div class="fp-text">
                                            <h6><a href="#">Stop au travail des enfants dans les plantations</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer Product End-->
                                <!--Footer Product Start-->
                                <div class="item">
                                    <div class="f-product">
                                        <img src="{{asset('assets/images/img_enfant1.jpg')}}" alt="">
                                        <div class="fp-text">
                                            <h6><a href="#">Stop au travail des enfants dans les plantations</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer Product End-->
                                <!--Footer Product Start-->
                                <div class="item">
                                    <div class="f-product">
                                        <img src="{{asset('assets/images/img_enfant2.jpg')}}" alt="">
                                        <div class="fp-text">
                                            <h6><a href="#">Stop au travail des enfants dans les plantations </a></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer Product End-->
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
    <!--Footer End-->
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
