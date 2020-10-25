<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <title>ECO HTML</title>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color.css')}}css/color.css" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <!-- CSS FILES End -->
</head>
<body class="coming-soon">
<header class="header-style-2">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{route('acceuil')}}"><img src="{{asset('assets/images/favicon.png')}}" alt="" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="{{route('acceuil')}}" >ACCUEIL</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('candidat')}}">A PROPOS</a> </li>
            </ul>
        </div>

    </nav>
</header>
<section class="coming-soon-wrapper">
    <div class="container">
        <div class="cs-txt">
            <h1>Félicitations pour votre inscription!!</h1>
            <p>Les informations pour pouvoir suivre le parcours de votre dossier a travers l'application mobile et le site web sont:</p>
            <div class="cs-newsletter-form">

                <input value="{{$identifiant ?? ''}}" disabled class="form-control">
                <button disabled class="subscribe">Identifiant</button>
            </div>
            <br>
            <div class="cs-newsletter-form">
                <input value="{{$mdp ?? ''}}" class="form-control" disabled>
                <button disabled class="subscribe">MOT DE PASSE</button>
            </div>

        </div>
    </div>

</section>

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
