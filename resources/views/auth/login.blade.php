<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css1/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css1/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div class="container">
	@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif
@if (Session::has('error'))
{{ Session::get('error') }}
@endif
@if (Session::has('success'))
{{ Session::get('success') }}
@endif
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{route('login')}}" method="POST">
				@csrf
					<span class="login100-form-title">
						Sign In
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="email" id="exampleInputEmail1" placeholder="Vui lòng nhập email" aria-describedby="emailHelp">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" id="exampleInputPassword1" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="/register" class="txt3">
							Sign up now
						</a>

						<a href="/home" class="txt3">
							Back to home
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>