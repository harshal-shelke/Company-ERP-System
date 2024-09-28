
<?php
require 'db.php';
require 'auth2.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:10:09 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Employee - HR and Company Management System</title>
	<!-- Favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="assets/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body class="light">
	<div class="loginmain">
		<div class="loginCard">
			<!--<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>-->
		
			<div class="wrapper" style="margin-left: 15rem;">
				
					<form  method="POST" tabindex="500" action="<?PHP echo $_SERVER['PHP_SELF'];?>" style="margin-top: 65px;">
					<h3>Login</h3>
					<div>
						<input type="text" name="em_email">
						<label>Mail</label>
					</div>
					<div class="passwd">
						<input type="password" name="em_password" required>
						<label>Password</label>
					</div>
				
					<div class="submit">
						<button class="dark"  type="submit" name="submit">Login</button>
					</div>
				
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="email">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="assets/js/app.min.js"></script>
	<!-- Extra page Js -->
	<script src="assets/js/pages/examples/login-register.js"></script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:10:09 GMT -->
</html>