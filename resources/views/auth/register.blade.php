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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{route('register')}}" method="POST">
				@csrf
					<span class="login100-form-title">
						Register
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập tên của bạn">
						<input class="input100" type="text" name="name" id="exampleInputEmail1" placeholder="Vui lòng nhập tên" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập email của bạn">
						<input class="input100" type="email" name="email" id="exampleInputEmail1" placeholder="Vui lòng nhập email" aria-describedby="emailHelp">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" id="exampleInputPassword1" placeholder="Password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							If you have account
						</span>

						<a href="/login" class="txt3">
							Login now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>