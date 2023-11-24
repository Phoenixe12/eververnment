<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auth-Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link href="{{ asset('assets/dist/img/logo_01.png') }}" rel="icon">
<link href="{{ asset('assets/dist/img/logo_01.png') }}" rel="apple-touch-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('connect/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('assets/dist/img/logo_01.png')}}"  alt="IMG">
				</div>
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }} ">
                    @csrf
					<span class="login100-form-title">


                        {{ __(' Admin') }}
					</span>

					<div class="wrap-input100 validate-input input @error('email') is-invalid @enderror" name="email" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror

					<div class="wrap-input100 input @error('password') is-invalid @enderror" >
						<input class="input100" type="password" name="password" value="{{ old('password') }}" placeholder="Password*" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            {{ __('Connexion') }}
						</button>
					</div>
					<div class="text-center p-t-136">
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('connect/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connect/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('connect/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connect/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connect/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('connect/js/main.js') }}"></script>

</body>
</html>




















