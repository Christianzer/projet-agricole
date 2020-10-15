<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion candidat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('connexion/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" action="{{route('conect')}}" method="post">
                @csrf
					<span class="login100-form-title p-b-33">
						Compte Connexion
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Identifiant valide ex@abc.xyz">
                    <input class="input100" type="text" placeholder="Identifiant" name="email">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Mot de passe demande">
                    <input class="input100" type="password" placeholder="Mot de passe" name="pass">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <button  type="submit" name="submit" class="login100-form-btn">
                        Connexion
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>



<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('connexion/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('connexion/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('connexion/js/main.js')}}"></script>

</body>
</html>
