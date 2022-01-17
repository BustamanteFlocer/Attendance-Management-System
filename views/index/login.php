	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" href="./login/css/main.css?v=<?php echo time(); ?>">
<!--===============================================================================================-->
</head>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login1001-pic ">
					<img src="login/css/23.jpg" alt="IMG">
				</div>
<div class="login100-form">
	<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/logo.png" alt="IMG">
				</div>
					<span class="login100-form-title">
						Welcome to IDScan
					</span>
			<form action="login/run" method="post">
	<div class="form-group has-feedback">
				<input type="text" class="input100" name="username" required placeholder="Username">
					
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>
			
			<div class="form-group has-feedback">
				<input type="password" class="input100" name="password" required placeholder="Password">
					
					
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>

						</span>
					
				</div>
					
											
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Login</button>
					</div>

					<!-- /.col -->

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
	
					</form>
			</div>
		</div>
	</div>
	
</form>

	
<div class="social-auth-links text-center"><?php if(isset($_GET['hasError'])): ?><p class="alert alert-danger">Login Error!</p><?php endif; ?></div>
			<!-- /.social-auth-links -->
		
	<!-- /.login-box -->
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

	
	

	
</body>
