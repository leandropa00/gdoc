<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ env('APP_NAME') }}</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link href="{{asset('images/logos/logoPng.png')}}" rel="SHORTCUT ICON">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    <div class="container-login100" style="background-image: url('{{asset('images/fondoLogin.jpeg')}}')">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="post" action="{{ url('/login') }}">
                @csrf
                
				<span class="login100-form-title p-b-37">
					<img src="{{asset('images/logos/logo.png')}}" height="60px">
				</span>
                
				<div class="wrap-input100 validate-input m-b-20" data-validate="Ingrase tu correo electrónico">
					<input class="input100" type="text" name="email" placeholder="Correo electrónico">
                    <span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input m-b-25" data-validate="Ingresa tu contraseña">
					<input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Entrar
					</button>
				</div>
            </form>		
            <br><br>	
		</div>
	</div>	
	
<!--===============================================================================================-->
	<script src="{{asset('/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/moment.min.js')}}"></script>
	<script src="{{asset('js/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>

{{-- <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><img src="{{asset('logo.png')}}" height="100px"></a>
        </div>
    
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar sesión</p>
    
            <form method="post" action="{{ url('/login') }}">
                @csrf
    
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
    
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
    
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="">
                            <label>
                                <input type="checkbox" name="remember"> Recordarme
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
    
            <a href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a><br>
            <a href="{{ url('/register') }}" class="text-center">Registrarme</a>
    
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    </body> --}}

</html>


